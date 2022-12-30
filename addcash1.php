<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$admin_cash=$_POST['admin_amount'];
$atm_id=$_SESSION['atm_id'];
$select_query="update atm set available_cash=available_cash+$admin_cash where atm_id=$atm_id";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query="select available_cash from atm where atm_id=$atm_id";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
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
      
<div class="container">
            <div class="banner-image">
                <div class="inner-banner-image">
                <b>
                    <h4>Transaction Successful</h4>
                </b>
           
              
                </div>
            </div>
        </div>
<div class="container1">
     <div class="row">
         <h7><br> <b><div class="col-xs-2">Cash Available: </div>
                        <div class="col-xs-10"><?php echo $row['available_cash']; ?> </div><br><br></b></h7>
            </div>
</div>
<div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <br><Br>    <a href="index.php" class="button">Exit</a> <br> &emsp;</center>
    </div>
            </div>
            </div>
</body>
</html>