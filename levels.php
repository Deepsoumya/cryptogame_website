<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LEVELS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  </head>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION['sess_user']))
    {
        // not logged in
        header('Location: login.php');
        exit();
    }
    ?>
    <div align="center" style="margin-top:20%;">
      <h4>Back to <a href="home.php" style="text-decoration:none;">HOME</a></h4>
    <button align="center" type="button" name="button" class="btn btn-info"><h3><a href="level1.php" style="text-decoration:none;color:white;">Level 1</a></h3></button>
    <button align="center" type="button" name="button" class="btn btn-info"><h3><a href="level2.php" style="text-decoration:none;color:white;">Level 2</a></h3></button>
    </div>
  </body>
</html>
