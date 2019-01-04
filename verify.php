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
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['activation_code']) && !empty($_GET['activation_code'])){
    // Verify data
    $email = mysqli_escape_string($db,$_GET['email']); // Set email variable
    $hash = mysqli_escape_string($db,$_GET['activation_code']); // Set hash variable

    $search = mysqli_query($db,"SELECT email, activation_code, active FROM signup WHERE email='$email' AND activation_code='$hash' AND active='0'") or die(mysql_error());
    $match  = mysqli_num_rows($search);

    if($match > 0){
        // We have a match, activate the account
        mysqli_query($db,"UPDATE signup SET active='1' WHERE email='$email' AND activation_code='$hash' AND active='0'") or die(mysql_error());
        echo '<div class="statusmsg">Your account has been activated, you can now <a href="login.php">login</a></div>';
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account. If activated then <a href="login.php">login</a></div>';
    }

}else{
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
     ?>
  </body>
</html>
