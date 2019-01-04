



<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<center>
<div class="container">

<div class="row">
<div class="col-lg-4"></div>

<div class="col-lg-4">

<form class="form-horizontal" role="form" method="post">

<h2>Forgot Password</h2>

<p>

Forgot your password? No problem, we will fix it. Just type your email below and we will send you password recovery instruction to your email. Follow easy steps to get back to your account.

</p>

<div class="row">

<div class="col-lg-12">

<label class="control-label">Your Email</label>

</div>

</div>



<div class="row">

<div class="col-lg-12">

<input class="form-control" name="uemail" type="email" placeholder="Enter your email here..." required>

</div>

</div>



<div class="row">

<div class="col-lg-12">

<button class="btn btn-success btn-block" name="submit" style="margin-top:8px;">Submit</button>

</div>

</div>

</form>

</div>
 <div>
 <div class="col-lg-4"></div>

</div>

</div>
</center>
</body>
<?php
include('db.php');
if(isset($_POST['submit']))

{

$uemail = $_POST['uemail'];

$uemail = mysqli_real_escape_string($db, $uemail);



if(checkUser($uemail) == "true")

{

$userID = UserID($uemail);

$token = generateRandomString();



$query = mysqli_query($db, "INSERT INTO recovery_keys (userID, token) VALUES ($userID, '$token') ");

if($query)

{

$send_mail = send_mail($uemail, $token);



if($send_mail === 'success')

{

$msg = 'A mail with recovery instruction has sent to your email.';

$msgclass = 'bg-success';

}else{

$msg = 'There is something wrong.';

$msgclass = 'bg-danger';

}

}else

{

$msg = 'There is something wrong.';

$msgclass = 'bg-danger';

}



}else

{

$msg = "This email doesn't exist in our database.";

$msgclass = 'bg-danger';

}

}

//functions

function checkUser($email)

{
          global $db;
          $query = mysqli_query($db, "SELECT id FROM signup WHERE email = '$email'");
          if(mysqli_num_rows($query) != 0)
          {
              return 'true';
          }else
          {
              return 'false';
              echo "string1";
          }
}
function UserID($email)

{

             global $db;

            $query = mysqli_query($db, "SELECT id FROM signup WHERE email = '$email'");

             $row = mysqli_fetch_assoc($query);

              return $row['id'];

}
function generateRandomString($length = 20) {

                // This function has taken from stackoverflow.com



                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                 $charactersLength = strlen($characters);

                $randomString = '';

                for ($i = 0; $i < $length; $i++)

{

                                $randomString .= $characters[rand(0, $charactersLength - 1)];

                }

    return md5($randomString);

}

//send mail

function send_mail($to, $token)

{

                require 'phpmailerautoload.php';



                $mail = new PHPMailer;



                $mail->isSMTP();

                $mail->Host = 'smtp.gmail.com';

                $mail->SMTPAuth = true;

                $mail->Username = 'canzonemusic@gmail.com';

                $mail->Password = 'deep@developer';

                $mail->SMTPSecure = 'ssl';

                $mail->Port = 465;



                $mail->From = 'canzonemusic@gmail.com';

                $mail->FromName = 'CryptoType';

                $mail->addAddress($to);



                $mail->isHTML(true);



                $mail->Subject = 'Password Recovery Instruction';

                $link = 'http://cryptotype.canzone.in/forgot_password.php?email='.$to.'&token='.$token;

                $mail->Body    = "<b>Hello</b><br><br>You have requested for your password recovery. <a href='$link' target='_blank'>Click here</a> to reset your password. If you are unable to click the link then copy the below link and paste in your browser to reset your password.<br><i>". $link."</i>";



                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



                if(!$mail->send()) {

                                return 'fail';

                } else {

                                return 'success';

                }

}

function verifytoken($userID, $token)

{

        global $db;

        $query = mysqli_query($db, "SELECT valid FROM recovery_keys WHERE userID = $userID AND token = '$token'");

        $row = mysqli_fetch_assoc($query);

        if(mysqli_num_rows($query) > 0)
        {

            if($row['valid'] == 1)
            {
              return 1;
            }else
            {
              return 0;
            }
        }else
        {
             return 0;
        }
}
?>
</html>
