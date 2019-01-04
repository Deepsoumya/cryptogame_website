<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto'>

        <style>
        body {
      background: #222D32;
      font-family: 'Roboto', sans-serif;
  }

  .login-box {
      margin-top: 75px;
      height: auto;
      background: #1A2226;
      text-align: center;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  }

  .login-key {
      height: 100px;
      font-size: 80px;
      line-height: 100px;
      background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
  }

  .login-title {
      margin-top: 15px;
      text-align: center;
      font-size: 30px;
      letter-spacing: 2px;
      margin-top: 15px;
      font-weight: bold;
      color: #ECF0F5;
  }

  .login-form {
      margin-top: 25px;
      text-align: left;
  }

  input[type=text] {
      background-color: #1A2226;
      border: none;
      border-bottom: 2px solid #0DB8DE;
      border-top: 0px;
      border-radius: 0px;
      font-weight: bold;
      outline: 0;
      margin-bottom: 20px;
      padding-left: 0px;
      color: #ECF0F5;
  }

  input[type=password] {
      background-color: #1A2226;
      border: none;
      border-bottom: 2px solid #0DB8DE;
      border-top: 0px;
      border-radius: 0px;
      font-weight: bold;
      outline: 0;
      padding-left: 0px;
      margin-bottom: 20px;
      color: #ECF0F5;
  }

  .form-group {
      margin-bottom: 40px;
      outline: 0px;
  }

  .form-control:focus {
      border-color: inherit;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-bottom: 2px solid #0DB8DE;
      outline: 0;
      background-color: #1A2226;
      color: #ECF0F5;
  }

  input:focus {
      outline: none;
      box-shadow: 0 0 0;
  }

  label {
      margin-bottom: 0px;
  }

  .form-control-label {
      font-size: 10px;
      color: #6C6C6C;
      font-weight: bold;
      letter-spacing: 1px;
  }

  .btn-outline-primary {
      border-color: #0DB8DE;
      color: #0DB8DE;
      border-radius: 0px;
      font-weight: bold;
      letter-spacing: 1px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  }

  .btn-outline-primary:hover {
      background-color: #0DB8DE;
      right: 0px;
  }

  .login-btm {
      float: left;
  }

  .login-button {
      padding-right: 0px;
      text-align: right;
      margin-bottom: 25px;
  }

  .login-text {
      text-align: left;
      padding-left: 0px;
      color: #A2A4A4;
  }

  .loginbttm {
      padding: 0px;
  }
      </style>

    <script>
    window.console = window.console || function(t) {};
  </script>



    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>

</head>
<body translate="no">
<!--<a href="index.php">Back to Main page</a>-->
<?php
session_start();
if(isset($_SESSION['sess_user']))
{
    // not logged in
    header('Location: home.php');
    exit();
}
include("db.php");
if(isset($_POST["submit_log"])){

if(!empty($_POST['nickname_log']) && !empty($_POST['password_log'])) {
    $user=$_POST['nickname_log'];
    $pass=$_POST['password_log'];

    //$con=mysql_connect('localhost','root','') or die(mysql_error());
    //mysql_select_db('user_registration') or die("cannot select DB");

    $query=mysqli_query($db,"SELECT * FROM signup WHERE nickname='$user' AND password='$pass'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['nickname'];
    $dbpassword=$row['password'];
    $id=$row['id'];
    $level1=$row['level1'];
    $activity=$row['active'];
    }
    if($user == $dbusername && $pass == $dbpassword)
    {
    //session_start();
    /*$_SESSION['sess_user']=$user;
    $_SESSION['sess_id']=$id;
    $_SESSION['lev1']=$level1;*/
    $one='1';

    /* Redirect browser */
    if(isset($_POST['nickname_log']) && !empty($_POST['nickname_log']) && isset($_POST['password_log']) && !empty($_POST['password_log'])){
    //$username = mysqli_escape_string($db,$_POST['nickname_log']);
    //$password = mysqli_escape_string($db,md5($_POST['password_log']));

    $search1 = mysqli_query($db,"SELECT nickname, password, active FROM signup WHERE nickname='$user' AND password='$pass' AND active='$one'") or die(mysqli_error($db));
    $match1  = mysqli_num_rows($search1);
    if($match1 != 0){
      $_SESSION['sess_user']=$user;
      $_SESSION['sess_id']=$id;
      $_SESSION['lev1']=$level1;
    $msg = 'Login Complete! Thanks';
    header("Location: home.php");
    // Set cookie / Start Session / Start Download etc...
    }else{
    $msg = "<p align='center' style='color:white'>Login Failed! Please make sure that you enter the correct details and that you have activated your account.</p>";
    echo $msg;
    }
    }


    }
    } else {
    echo "<p align='center'>Invalid username or password!</p>";
    }

} else {
    echo "All fields are required!";
}
}
?>
<!--<form class="" action="" method="post">
  <input type="text" name="nickname_log" value="" placeholder="nickname" required>
  <input type="password" name="password_log" value="" placeholder="*******" required>
  <input type="submit" name="submit_log" value="LogIn">
</form>-->

















    <div class="container">
        <div class="row">
          <style media="screen">
          .main-page{
            color: #D1D4FF;
          }
          .main-page:hover{
            color: #FFD1D1;
          }
          .connection-main{
            color: white;
          }
          </style>
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                  <h6 class="connection-main">Back to <a href="index.php" class="main-page" style="text-decoration:none;">Main Page</a></h6>
                    LOGIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <label class="form-control-label">NICKNAME</label>
                                <input type="text" name="nickname_log" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password_log" class="form-control"required>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <input type="submit" name="submit_log" class="btn btn-outline-primary" value="LOGIN">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12" style="color:white;">
                  <style media="screen">
                    .register-here{
                      color: #D1D4FF;
                    }
                    .register-here:hover{
                      color: #FFD1D1;
                    }
                    .connection-register{
                      color: white;
                    }
                  </style>
                  <h6 class="connection-register">Do not create yet? <a href="register.php" class="register-here" style="text-decoration:none;">Register here</a></h6>
                </div>
            </div>
        </div>









</body>
