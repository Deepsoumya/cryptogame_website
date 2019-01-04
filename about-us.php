<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link rel='stylesheet prefetch' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <style>
        body {
  	font-size: 12px;
    color:#FFF;
    background:#2D2E2F;
  	font-family: Menlo, Monaco, "Andale Mono", "lucida console", "Courier New", monospace;
  }
  .ui-widget{
    font-family: Menlo, Monaco, "Andale Mono", "lucida console", "Courier New", monospace;
    font-size:14px;
    padding:10px;
    border-width:3px;
  }
  .ui-dialog .ui-dialog-content{
    padding-top:20px;
  }
  .demo-description {
  	clear: both;
  	padding: 12px;
  	font-size: 1.3em;
  	line-height: 1.4em;
  }

  .ui-draggable, .ui-droppable {
  	background-position: top;
  }
  .ui-dialog .ui-dialog-titlebar-close {
    width:auto;
  }
  .ui-icon{
    text-indent: 0;
    width:auto;
  }
  button{
    margin:20px auto;
    display:block;
    background:#CE0538;
    border:none;
    padding:10px;
    font-size:16px;
    margin:10px auto;
    border-radius:5px;
    cursor:pointer;
    width:500px;
    color:#FFF;
    font-family: Menlo, Monaco, "Andale Mono", "lucida console", "Courier New", monospace;
  }
  .btn-red{
    background: #CE0538;
    padding:10px;
    color:#FFF;
    text-decoration:none;
    border-radius:2px;
    display:inline-block;
    margin-top:10px;
  }
  .btn-red:focus,
  button:focus,
  button:hover{
    background:#830324;
  }
  .ui-button-icon-only .ui-button-text,
  .ui-button-icons-only .ui-button-text{
    text-indent:0;
    padding: 0;
  }
  .ui-dialog .ui-dialog-titlebar-close{
    height: 20px;
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
    <html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Us</title>
</head>
<body>
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
  <h2 class="connection-main" align="center">Back to <a href="index.php" class="main-page" style="text-decoration:none;">Main Page</a></h2>
  <div class="demo-description">
    <h1 align="center">About Us</h1><hr width="50%">
    <p align="center" style="margin-left:25%;margin-right:25%;">CryptoType is a free online Cryptogaphy based game where you will going to face challenges of Cryptogaphic Puzzles, the more level higher the more tougher it is.
    I have specially made it for those who lovw Cryptography. The hints are given in our facebook page and through also email, just try it, I bet you love it.</p>
    <center><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCryptoType-148302532654048%2F&tabs=timeline&width=340&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=126816717931834" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></center>
  </div>
</body>


</html>
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="https://demo.coheractio.com/jQuery-UI-Dialog-ClickOutside/ui-clickoutside/jquery.ui.dialog-clickoutside.js"></script>



    <script >
      // JS for demo
$( document ).ready(function() {
$( "#dialog1" ).dialog({
			autoOpen: false,
			show: {
				effect: "fade",
				duration: 150
			},
			hide: {
				effect: "fade",
				duration: 150
			},
			position: {
  			my: "center",
  			at: "center"
			},
			// Add the 2 options below to use click outside feature
			clickOutside: true, // clicking outside the dialog will close it
			clickOutsideTrigger: "#opener1"  // Element (id or class) that triggers the dialog opening
		});

    $( "#dialog2" ).dialog({
			autoOpen: false,
			show: {
				effect: "fade",
				duration: 150
			},
			hide: {
				effect: "fade",
				duration: 150
			},
			position: {
  			my: "center",
  			at: "center"
			},
			// Add the 2 options below to use click outside feature
			clickOutside: true, // clicking outside the dialog will close it
			clickOutsideTrigger: "#opener2"  // Element (id or class) that triggers the dialog opening
		});

    $( "#dialog3" ).dialog({
			autoOpen: false,
			show: {
				effect: "fade",
				duration: 150
			},
			hide: {
				effect: "fade",
				duration: 150
			},
			position: {
  			my: "center",
  			at: "center"
			},
			clickOutside: false // For demo purpose. Not necessary because this is the default value
		});

		$( "#opener1" ).click(function() {
			$( "#dialog1" ).dialog( "open" );
		});

		$( "#opener2" ).click(function() {
			$( "#dialog2" ).dialog( "open" );
		});

		$( "#opener3" ).click(function() {
			$( "#dialog3" ).dialog( "open" );
		});
});

/* jQuery UI dialog clickoutside */

/*
The MIT License (MIT)

Copyright (c) 2013 - AGENCE WEB COHERACTIO

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

$.widget( "ui.dialog", $.ui.dialog, {
  options: {
    clickOutside: false, // Determine if clicking outside the dialog shall close it
    clickOutsideTrigger: "" // Element (id or class) that triggers the dialog opening
  },

  open: function() {
    var clickOutsideTriggerEl = $( this.options.clickOutsideTrigger );
    var that = this;

    if (this.options.clickOutside){
      // Add document wide click handler for the current dialog namespace
      $(document).on( "click.ui.dialogClickOutside" + that.eventNamespace, function(event){
        if ( $(event.target).closest($(clickOutsideTriggerEl)).length == 0 && $(event.target).closest($(that.uiDialog)).length == 0){
          that.close();
        }
      });
    }

    this._super(); // Invoke parent open method
  },

  close: function() {
    var that = this;

    // Remove document wide click handler for the current dialog
    $(document).off( "click.ui.dialogClickOutside" + that.eventNamespace );

    this._super(); // Invoke parent close method
  },

});
      //# sourceURL=pen.js
    </script>


  </body>
</html>
