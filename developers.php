<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DEVELOPERS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <style>
      @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
body {
  background:#cbc9e8;
  overflow:hidden;
  font-family: 'Lato', sans-serif;
}
#card {
  overflow:hidden;
  text-align:center;
  width:320px;
  height:535px;
  background: url(back-avatar.jpg);
  background-size:cover;
  background-position:center center;
  position:absolute;
  top:0; left:0; right:0; bottom:0;
  margin:auto;
  -webkit-box-shadow:
    0px 30px 30px -20px rgba(0,0,0,1),
    inset 0 0 0 1000px rgba(67,52,109,.6);
          box-shadow:
    0px 30px 30px -20px rgba(0,0,0,1),
    inset 0 0 0 1000px rgba(67,52,109,.6);
  -webkit-transition: all .4s cubic-bezier(.37,.26,.35,1);
  transition: all .4s cubic-bezier(.37,.26,.35,1)
}
#card:hover {
  -webkit-box-shadow:
    0px 30px 30px -20px rgba(0,0,0,.9),
    inset 0 0 0 1000px rgba(67,52,109,.2);
          box-shadow:
    0px 30px 30px -20px rgba(0,0,0,.9),
    inset 0 0 0 1000px rgba(67,52,109,.2);
}
#card:hover #avatar {
  -webkit-animation:none;
          animation:none;
  -webkit-box-shadow:0;
          box-shadow:0;
  width:200px;
  height:200px;
}

#card:hover #profile{
  opacity:1;
  bottom:0;
}
#profile {
  -webkit-transition: all .5s cubic-bezier(.37,.26,.35,1);
  transition: all .5s cubic-bezier(.37,.26,.35,1);
  opacity:0;
  position:absolute;
  bottom:20px;
  width:100%;
}
#profile h1 {
  color:#fff;
  padding:0;
  margin:0;
}

#profile h3 {
  color:#aaa;
  padding:0;
  margin:5px 0 40px 0;
  font-size:.9em
}
#avatar {
  -webkit-transition: all .4s cubic-bezier(.37,.26,.35,1);
  transition: all .4s cubic-bezier(.37,.26,.35,1);
  -webkit-animation: circleAn 4s infinite;
          animation: circleAn 4s infinite;
  width:150px; height:150px;
  position:absolute;
  top:0; left:0; right:0; bottom:0;
  margin:auto;
  background:url(developer1.jpg);
  background-size:cover;
  background-position:center center;
  border-radius:100%;
  -webkit-box-shadow:0px 30px 30px -25px rgba(0,0,0,0.6);
          box-shadow:0px 30px 30px -25px rgba(0,0,0,0.6);
}
/*102,52,105*/
@-webkit-keyframes circleAn {
  0%   {
    -webkit-box-shadow:
      0px 30px 30px -25px rgba(0,0,0,0.6),
      0px 0px 0px 0px rgba(0,128,128,1),
      0px 0px 0px 0px rgba(0,128,128,.7),
      0px 0px 0px 0px rgba(0,128,128,.5);
            box-shadow:
      0px 30px 30px -25px rgba(0,0,0,0.6),
      0px 0px 0px 0px rgba(0,128,128,1),
      0px 0px 0px 0px rgba(0,128,128,.7),
      0px 0px 0px 0px rgba(0,128,128,.5);
  }
 100% {
   -webkit-box-shadow:
     0px 30px 30px -25px rgba(0,0,0,0.6),
     0px 0px 0px 70px rgba(0,128,128,0),
     0px 0px 0px 200px rgba(0,128,128,0),
     0px 0px 0px 300px rgba(0,128,128,0);
           box-shadow:
     0px 30px 30px -25px rgba(0,0,0,0.6),
     0px 0px 0px 70px rgba(0,128,128,0),
     0px 0px 0px 200px rgba(0,128,128,0),
     0px 0px 0px 300px rgba(0,128,128,0);
  }
}
@keyframes circleAn {
  0%   {
    -webkit-box-shadow:
      0px 30px 30px -25px rgba(0,0,0,0.6),
      0px 0px 0px 0px rgba(0,128,128,1),
      0px 0px 0px 0px rgba(0,128,128,.7),
      0px 0px 0px 0px rgba(0,128,128,.5);
            box-shadow:
      0px 30px 30px -25px rgba(0,0,0,0.6),
      0px 0px 0px 0px rgba(0,128,128,1),
      0px 0px 0px 0px rgba(0,128,128,.7),
      0px 0px 0px 0px rgba(0,128,128,.5);
  }
 100% {
   -webkit-box-shadow:
     0px 30px 30px -25px rgba(0,0,0,0.6),
     0px 0px 0px 70px rgba(0,128,128,0),
     0px 0px 0px 200px rgba(0,128,128,0),
     0px 0px 0px 300px rgba(0,128,128,0);
           box-shadow:
     0px 30px 30px -25px rgba(0,0,0,0.6),
     0px 0px 0px 70px rgba(0,128,128,0),
     0px 0px 0px 200px rgba(0,128,128,0),
     0px 0px 0px 300px rgba(0,128,128,0);
  }
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
  <body>
    <style media="screen">
    .main-page{
      color: #26327C;
    }
    .main-page:hover{
      color: #7C2629;
    }
    .connection-main{
      color: black;
    }
    </style>
    <h4 class="connection-main" align="center">Back to <a href="index.php" class="main-page" style="text-decoration:none;">Main Page</a></h4>
    <div id="card">
  <div id="avatar"></div>
  <div id="profile">
    <h1>Deepsoumya Chakraborti</h1>
    <h3>Web Developer</h3>
  </div>
</div>
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
  </body>
</html>
