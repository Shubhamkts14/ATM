<?php
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$newpin= $_POST['newpin'];
$pin=$_SESSION['Pin'];
$select_query="update card set card_pin=$newpin where card_pin=$pin";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
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
      
    <div class="header">
            <div class="banner-image">
                <div class="inner-banner-image">
                <b>
                    <h4>Pin is Successfully Changed</h4>
                </b>
           
              
                </div>
            </div>   
        </div>
    <div class="container">
        <div class="padding">
        
            <center>  <a href="index.php" class="button">Exit</a></center> <br><br><br> &emsp; 
                   
        </div>
    </div>
        
    </body>
</html>


