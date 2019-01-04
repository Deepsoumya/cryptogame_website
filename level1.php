<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
  <img align="center" src="Clock.gif" alt="" style="margin-left:28%;position:fixed;"/>
  <img align="center" src="pic.jpg" alt="" style="margin-top:15%;margin-left:42%;position:fixed;"/>
  <?php
  echo "<p style='position:fixed;top:0;left:0;margin:1%;'>'.-.. . ...-'</p>";
  echo "<p style='position:fixed;top:0;right:0;margin:1%;'>' . .-.. ..--.-'</p>";
  echo "<p style='position:fixed;bottom:0;right:0;margin:1%;'>' .---- ..--.- .- -.'</p>";
  echo "<p style='position:fixed;bottom:0;left:0;margin:1%;'>' ... .-- . .-.'</p>";
  ?>

  <style media="screen">
    .absolute{
      background-image:url('wall.jpg');
      background-size:cover;
      background-repeat:no-repeat;
      height:100%;
      width:100%;
      position:fixed;
      margin:none;
    }
  </style>
  <div class="absolute" style="">

<?php

session_start();
if(!isset($_SESSION['sess_user']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
$level_1=$_SESSION['lev1'];
?>
<h1 align="center" style="margin-top:5%;">LEVEL-1</h1>
<h1 align="center" style="margin-top:10%;">LOOK BEHIND</h1>
<h1 align="center">1 2</h1>
<h1 align="center">4 3</h1>
<form align="center" class="" style="position:relative;top:20%;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h6>Your Answer</h6>
  <input type="text" name="level1answer" class="" value="" required><br>
  <input type="submit" name="submit" class="btn btn-info" value="Submit">
</form>
<?php
//$level1 = $_POST["level1answer"];
  include("db.php");

  $sessid=$_SESSION['sess_id'];
  $query=mysqli_query($db,"SELECT * FROM signup WHERE nickname='".$_SESSION['sess_user']."'");
  $numrows=mysqli_num_rows($query);
  if($numrows!=0)
  {
  while($row=mysqli_fetch_assoc($query))
  {

  $level1=$row['level1'];
  $levelanswer1='level_1_answer';
  if(isset($_POST['submit'])) {
    if($_POST['level1answer']==$levelanswer1 && $level1==$levelanswer1){
      echo "<p align='center'>This answer of yours is correct but you have already answered a correct answer previously, go to <a href='level2.php'>next level</a></p>";
    }elseif ($_POST['level1answer']!=$levelanswer1 && $level1==$levelanswer1) {
      echo "<p align='center'>This attempt is wrong but you have already answered a correct answer previously, go to <a href='level2.php'>next level</a></p>";
    }elseif ($_POST['level1answer']==$levelanswer1 && $level1=='0') {
      //$sql = "INSERT INTO signup (level1) VALUES ('level_1_answer')";
      //$result1 = mysqli_query($db,$sql);
      $sql123 = "UPDATE signup SET level1='$levelanswer1' WHERE id='$sessid'";
      if (mysqli_query($db, $sql123)) {
        echo "<p align='center'>Your answer is correct. Go to the <a href='level2.php'>Next Level</a></p>";
        $query123 = "UPDATE signup SET level_score='1' WHERE id='$sessid'";
        $result123 = mysqli_query($db, $query123);
        $level_1=$levelanswer1;
        $file = "session" . $_SESSION['sess_id'] . ".php";  //Free php host usualy doesn't allow other files then *.php.
          $fp = fopen($file, "a"); // Append to file.
          $data = "<a href='#'>level2</a><br>";
          fwrite($fp, $data);
          fclose($fp);
      }
    }else {
      echo "<p align='center'>Your answer is wrong.</p>";    }
  }
  elseif (!isset($_POST['submit'])) {
    # code...
  }
  }
}


?>
</div>
<a href="home.php" style="position:absolute;top:1%;margin-left:47%;">Back to HOME</a>


</body>
