<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body style="background-color:#14163D;">
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <?php
        session_start();
        /*if(!isset($_SESSION['sess_user']))
        {
            // not logged in
            header('Location: index.php');
            exit();
        }else {
          header('Location: home.php');
          exit();
        }*/
        include('db.php');
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['token']) && !empty($_GET['token'])){
        // Verify data
      if(isset($_POST["submit"])){
        $new_password=$_POST['new_password'];
        $email = mysqli_escape_string($db,$_GET['email']); // Set email variable
        $token = mysqli_escape_string($db,$_GET['token']); // Set hash variable

        $search = mysqli_query($db,"SELECT email FROM signup WHERE email='$email'") or die(mysql_error());
        $match  = mysqli_num_rows($search);
        $search1 = mysqli_query($db,"SELECT token FROM recovery_keys WHERE token='$token'") or die(mysql_error());
        $match1  = mysqli_num_rows($search1);
        if($match > 0){
            // We have a match, activate the account
            mysqli_query($db,"UPDATE signup SET password='$new_password' WHERE email='$email'") or die(mysql_error());
            echo '<div class="statusmsg">Your account password reset is done , you can now <a href="login.php">login</a> with new password</div>';
        }else{
            // No match -> invalid url or account has already been activated.
            echo '<div class="statusmsg">The url is either invalid</div>';
        }
      }
    }else{
        // Invalid approach
        echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
    }
         ?>
         <h1 align="center" style="color:white;margin-top:15%;">Reset Password</h1>
         <form class="" action="" method="post" align="center" style="margin-top:5%;">
           <h2><input type="password" name="new_password" placeholder="new password"></h2>
           <h2><input type="password" name="confirm_new_password" placeholder="confirm new password"></h2>
           <h2><input type="submit" name="submit" class="btn btn-default" value="Reset"></h2>
         </form>
      </body>
    </html>

  </body>
</html>
