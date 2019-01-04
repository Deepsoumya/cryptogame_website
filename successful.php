<?php

echo "You have successfully registered.<br>";
include('login.php');
if(isset($_SESSION['sess_user']))
{
    // not logged in
    header('Location: home.php');
    exit();
}
?>
