<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ATM System Login: Insert Card</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="demo-headline" style="padding:0px;">
        <h1 class="demo-logo">ATM
          <small>24 Hour Banking</small>
        </h1>
      </div> <!-- /demo-headline -->
      <div class="row">
        <div class="col-xs-12" id="screenView">
          <!-- Place <h1></h1> below -->

          <!-- Replace Video with Animated Gif or Animated SVG -->
          <div class="row">
            <div class="col-xs-12 text-center">
              <a href = "pin.php"><button class="demo-section-title text-uppercase text-center">Insert Card to Begin</button></a>
              <img src="img/InsertCardAnimate.gif" />
            </div> <!-- // ANIMATED GIF -->


            

            
          </div><!-- // END login screen  -->
      </div><!--  // END column-->
      <div class="col-xs-12">
        <h2><blockquote>This ATM System is for software testing only! --- <a href="#">sitemap</a></blockquote> </h2>
      </div>
  </div><!-- // END row-->

      


    </div> <!-- /container -->

    

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>