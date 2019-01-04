<!--<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>-->
<?php
session_start();
if(!isset($_SESSION['sess_user']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
include('db.php');
$query=mysqli_query($db,"SELECT * FROM signup WHERE nickname='".$_SESSION['sess_user']."'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
while($row=mysqli_fetch_assoc($query))
{

$level1=$row['level1'];
$levelanswer1='level_1_answer';
if($level1!=$levelanswer1){
  header('Location: level1.php');
}
}
}
?>
<!--<form class="" action="<?php /*echo $_SERVER['PHP_SELF'];*/ ?>" method="post">
  <input type="text" name="level2answer" value="">
  <input type="submit" name="submit" value="Submit">
</form>-->
<?php
/*
if (isset($_POST['submit'])){ //If it is the first time, it does nothing
  if ($_POST['level2answer'] == "level_2_answer") {
    echo "correct level 2<br>";
    echo "<a href='#'>Go to Level 3</a>";
    $file = "session" . $_SESSION['sess_id'] . ".php";  //Free php host usualy doesn't allow other files then *.php.
      $fp = fopen($file, "a"); // Append to file.

      $data = "<a href='#'>level3</a>";
      fwrite($fp, $data);
      fclose($fp);
  }
}*/
?>
<!--</body>-->
<h1 align="center" style="margin-top:25%;">Coming Soon</h1>
