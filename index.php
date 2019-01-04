<?php
session_start();
if(isset($_SESSION['sess_user']))
{
    // not logged in
    header('Location: home.php');
    exit();
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>CryptoType</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <style>
      @import url(https://fonts.googleapis.com/css?family=Oxygen:400,300);
@import url(https://fonts.googleapis.com/css?family=Montserrat:700);

*{
  margin: 0;
  padding: 0;
}
.intro{
  margin: auto;
}
.black {
  width: 50%;
  float: left;
  background: #283644;
  height: 100vh;
}

.white{
  width: 50%;
  float: right;
  background: #4D727E;
  height: 100vh;
}

.box{
  height: 300px;
  width: 500px;
  background: #069A8E;
  position:absolute;
  top:150px;
  left:0;
  right:0;
  margin:auto;
  border-radius:20px;
}

.boxfather{
  width:100%;
  position:absolute;
}
.box h1{
  color: #E4E4E4;
  font-size: 2em;
  text-align: center;
  position: relative;
  top:70px;
  font-family: 'Montserrat', sans-serif;
}

.box button{
  left:43%;
  position:relative;
  top:120px;
  padding: 8px 20px;
  cursor:pointer;
  border:0;
  outline:none;
  color:#525252;
  background:#E4E4E4;
  transition:all .3s ease;
  font-size: 19px;
  font-family: montserrat;
  border-radius:5px;
}
.homepage{
  height: 100vh;
  position:relative;
  /*top:40px;*/


}
/*.homepage p{
  width: 80%;
  line-height: 1.5;
  margin:50px auto;
  font-family: oxygen;
  font-size: 18px;
  color: #585858;
}
.homepage h1{
  padding-top: 50px;
  width: 80%;
  margin:auto;
  font-family: montserrat;
  color: #525252;
  font-size: 40px;
}*/

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

    <div class="intro">
  <div class="black"></div>
  <div class="white"></div>
  <div class="boxfather">
    <div class="box">
      <h1 class="box-h1">WELCOME to CryptoType</h1><br>
      <!--<h2 align="center">CryptoType</h2>-->
      <button>Enter</button>
    </div>
  </div>
    </div>
    <div class="homepage">
          <style class="cp-pen-styles">
          @import url(https://fonts.googleapis.com/css?family=Dancing+Script:400,700);
.body, html {
  height: 100%;
}

.body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0;
  padding: 0;
  /*background-color: #446072;*/
  background-color: #8B755C;
  font-family: monospace;
  color: white;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  overflow: hidden;
}
.h1 {
  margin-top: 2rem;
}
.shelf {
  position: relative;
  width: 30rem;
  height: 15rem;
  border: 0.5rem solid #374d5b;
  border-radius: 0.5rem;
  background-color: rgba(255, 255, 255, 0.1);
  -webkit-perspective: 130rem;
          perspective: 130rem;
  -webkit-box-shadow: inset 0 0 2rem rgba(0, 0, 0, 0.2);
          box-shadow: inset 0 0 2rem rgba(0, 0, 0, 0.2);
}
.door {
  position: absolute;
  width: 14.8rem;
  height: 14rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 1rem;
  /*background-color: #374d5b;*/
  background-color: #623434;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
  outline: 1px solid transparent;
}
.door::before {
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.1);
    content: "";
  }
.door.left {
    border-radius: 0 0.75rem 0.75rem 0;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    -webkit-animation:
      leftDoorOpen 3.5s ease-out forwards 1s,
      leftDoorFlap 15s linear infinite forwards 9s;
            animation:
      leftDoorOpen 3.5s ease-out forwards 1s,
      leftDoorFlap 15s linear infinite forwards 9s;
    -webkit-transform-origin: 0 0 0;
            transform-origin: 0 0 0;
  }
.door.right {
    right: 0;
    border-radius: 0.75rem 0 0 0.75rem;
    -webkit-animation:
      rightDoorOpen 3s ease-out forwards 1.5s,
      rightDoorFlap 10s linear infinite forwards 8s;
            animation:
      rightDoorOpen 3s ease-out forwards 1.5s,
      rightDoorFlap 10s linear infinite forwards 8s;
    -webkit-transform-origin: 100% 0 0;
            transform-origin: 100% 0 0;
  }
.book {
  position: absolute;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0.8rem 4rem 0.8rem 2rem;
  border-radius: 0.25rem;
  background-color: rgba(255, 255, 255, 0.1);
  color: white;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  cursor: pointer;
  -webkit-box-shadow: inset 0 0 0.75rem rgba(255, 255, 255, 0.1);
          box-shadow: inset 0 0 0.75rem rgba(255, 255, 255, 0.1);
}
.book.levels {
    -webkit-transform: rotate(-90deg) translate(-12.4rem, 3rem);
            transform: rotate(-90deg) translate(-12.4rem, 3rem);
    -webkit-transform-origin: 0;
            transform-origin: 0;
  }
.book.about-us {
    -webkit-transform: rotate(-100deg) translate(-13.4rem, 6.1rem);
            transform: rotate(-100deg) translate(-13.4rem, 6.1rem);
    -webkit-transform-origin: 0;
            transform-origin: 0;
    outline: 1px solid transparent;
  }
.book.contact {
    right: 2rem;
    bottom: 0.2rem;
    border-radius: 0.3rem 0 0 0.3rem;
  }
.book.developers {
    right: 0.8rem;
    bottom: 3.3rem;
    border-radius: 0.3rem 0 0 0.3rem;
  }
.book.not-found {
    width: 12rem;
    height: 3.5rem;
    border: 1px dashed rgba(255, 255, 255, 0.3);
    background-color: transparent;
    -webkit-transform: rotate(-90deg) translate(-12rem, 13rem) scale(1);
            transform: rotate(-90deg) translate(-12rem, 13rem) scale(1);
    -webkit-transform-origin: 0;
            transform-origin: 0;
    cursor: default;
    -webkit-animation: bookFadeOut 1s 3s infinite forwards;
            animation: bookFadeOut 1s 3s infinite forwards;
  }
.book.not-found::after {
      display: block;
      width: 10rem;
      padding-left: 5rem;
      background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='80' height='30'><path fill='rgb(255, 255, 255)' d='M7.688,3.737C6.1,10.409,4.624,16.982,2.475,23.517c-0.424,1.29,0.724,2.338,1.957,1.916 c5.879-2.021,11.743-4.107,17.409-6.696c1.246-0.572,0.443-2.366-0.815-1.932c-3.856,1.333-7.695,2.69-11.565,3.959 c2.879-2.526,5.485-5.215,9.013-7.17c4.441-2.459,9.299-4.109,14.281-4.915c10.903-1.772,22.052,0.562,31.979,5.04 c9.241,4.162,12.895,8.725,13.164,4.942c0.121-1.69-5.57-4.953-14.125-8.714C53.19,5.292,41.094,3.539,29.636,6.058 c-7.122,1.567-16.708,5.374-22.064,11.544c1.359-4.455,2.461-9.028,3.032-13.563C10.852,2.091,8.12,1.927,7.688,3.737z'/></svg>");
      background-repeat: no-repeat;
      background-size: 4rem;
      background-position: left center;
      font-family: "Dancing Script";
      text-transform: lowercase;
      font-size: 25px;
      /*content: "this page can't be found";*/
      -webkit-transform: rotate(90deg) translate(6rem, -1rem);
              transform: rotate(90deg) translate(6rem, -1rem);
      opacity: 0.3;
    }
.book:hover:not(.not-found) {
    background-color: rgba(255, 255, 255, 0.2);
  }
@-webkit-keyframes leftDoorOpen {
  60% {-webkit-transform: rotateY(-115deg);transform: rotateY(-115deg)}
  100% {-webkit-transform: rotateY(-110deg);transform: rotateY(-110deg)}
}
@keyframes leftDoorOpen {
  60% {-webkit-transform: rotateY(-115deg);transform: rotateY(-115deg)}
  100% {-webkit-transform: rotateY(-110deg);transform: rotateY(-110deg)}
}
@-webkit-keyframes rightDoorOpen {
  60% {-webkit-transform: rotateY(125deg);transform: rotateY(125deg)}
  100% {-webkit-transform: rotateY(120deg);transform: rotateY(120deg)}
}
@keyframes rightDoorOpen {
  60% {-webkit-transform: rotateY(125deg);transform: rotateY(125deg)}
  100% {-webkit-transform: rotateY(120deg);transform: rotateY(120deg)}
}
@-webkit-keyframes rightDoorFlap {
  0% { -webkit-transform: rotateY(120deg); transform: rotateY(120deg)}
  5% {-webkit-transform: rotateY(125deg);transform: rotateY(125deg)}
  15% {-webkit-transform: rotateY(117deg);transform: rotateY(117deg)}
  25% {-webkit-transform: rotateY(123deg);transform: rotateY(123deg)}
  30% {-webkit-transform: rotateY(120deg);transform: rotateY(120deg)}
  100% {-webkit-transform: rotateY(120deg);transform: rotateY(120deg)}
}
@keyframes rightDoorFlap {
  0% { -webkit-transform: rotateY(120deg); transform: rotateY(120deg)}
  5% {-webkit-transform: rotateY(125deg);transform: rotateY(125deg)}
  15% {-webkit-transform: rotateY(117deg);transform: rotateY(117deg)}
  25% {-webkit-transform: rotateY(123deg);transform: rotateY(123deg)}
  30% {-webkit-transform: rotateY(120deg);transform: rotateY(120deg)}
  100% {-webkit-transform: rotateY(120deg);transform: rotateY(120deg)}
}
@-webkit-keyframes leftDoorFlap {
  0% { -webkit-transform: rotateY(-110deg); transform: rotateY(-110deg)}
  5% {-webkit-transform: rotateY(-115deg);transform: rotateY(-115deg)}
  15% {-webkit-transform: rotateY(-107deg);transform: rotateY(-107deg)}
  25% {-webkit-transform: rotateY(-113deg);transform: rotateY(-113deg)}
  30% {-webkit-transform: rotateY(-110deg);transform: rotateY(-110deg)}
  100% {-webkit-transform: rotateY(-110deg);transform: rotateY(-110deg)}
}
@keyframes leftDoorFlap {
  0% { -webkit-transform: rotateY(-110deg); transform: rotateY(-110deg)}
  5% {-webkit-transform: rotateY(-115deg);transform: rotateY(-115deg)}
  15% {-webkit-transform: rotateY(-107deg);transform: rotateY(-107deg)}
  25% {-webkit-transform: rotateY(-113deg);transform: rotateY(-113deg)}
  30% {-webkit-transform: rotateY(-110deg);transform: rotateY(-110deg)}
  100% {-webkit-transform: rotateY(-110deg);transform: rotateY(-110deg)}
}
@-webkit-keyframes bookFadeOut {
  50% {border: 1px dashed rgba(255, 255, 255, 0.1);}
}
@keyframes bookFadeOut {
  50% {border: 1px dashed rgba(255, 255, 255, 0.1);}
}</style>
          <div class="body">
          <nav class="shelf">
            <a class="book levels" href="levels.php" style="text-decoration: none;">LEVELS</a>
            <a class="book about-us" href="about-us.php" style="text-decoration: none;">ABOUT US</a>
            <a class="book contact" href="contact-us.php" style="text-decoration: none;">Contact</a>
            <a class="book developers" href="developers.php" style="text-decoration: none;">DEVELOPERS</a>

  <span class="book not-found">hello&copy;<b style="color:red;">users</b></span>

  <span class="door left"></span>
  <span class="door right"></span>
</nav>
<h1 class="h1">Welcome to CryptoType</h1>
<p>The ultimate online cryptography game</p>
<!--<style media="screen">
  .login a,.register a{
    color: white;
  }
</style>-->
<button type="button" name="login" class="login btn btn-info" style="margin:1%;position:absolute;top:0px;left:50%;"><a href="login.php" style="text-decoration:none;color:white;">LogIn</a></button>
<button type="button" name="register" class="register btn btn-danger" style="margin:1%;position:absolute;top:0px;right:50%;"><a href="register.php" style="text-decoration:none;color:white;">Register</a></button>
<button type="button" name="score_board" class="login btn btn-default" style="margin:1%;position:absolute;top:0px;right:0px;"><a href="score_board.php" style="text-decoration:none;color:black;">Score Board</a></button>
</div>
          <!--<h1>Welcome to CryptoType</h1><br>
          <p><button class="btn btn-danger"><a href="login.php" style="color:white;underline:none;">LogIn</a></button>...
            <button class="btn btn-info"><a href="register.php" style="color:white;">Register</a></button></p>-->

</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script >
      $(function(){
  $('.homepage').hide();
  $('.box').delay(500).effect("bounce", { times: 8 }, 800);
  $('.box').hide().slideDown(500);


  $('button').click(function(){
    $('.intro').slideUp(400);
     $('.box').slideUp(200);
    $('.homepage').delay(500).slideDown(300);
  });

});
      //# sourceURL=pen.js
    </script>
  </body>
</html>
