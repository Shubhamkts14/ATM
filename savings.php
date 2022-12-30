<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select account_type from account where "
        . "user_id=(select user_id from card where card_pin=$pin)";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
$type="savings";
if($row['account_type']!=$type){
    echo"<script>
alert('OOPS! You have a current account');
window.location.href='cash.php';
</script>";
}
else{
    $select_query="select balance from card where card_pin=$pin";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
}
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
            <div class="row">
                <br><Br><BR> <h7> <b><div class="col-xs-2">Remaining Balance: </div>
                        <div class="col-xs-10"><?php echo $row['balance']; ?> </div><br><br></b></h7> &emsp;&emsp;</h7>
     <center>
        <div class="container">
            <div class="row">
                <div class="col-xs-10"><center>
                        <form method="post" action="savings1.php">
                            <br><br><br><input type="text" placeholder="Enter the amount to Withdraw"  class="form-control input-lg" name="cash"><br><br>
                 
                    
                 <input type="submit" class="button" value="Submit">&emsp;
                        <input type="submit" class="button" formaction="pin.php" value="Clear">
                            </form>
                          
                    </center>
            </div>
                    
                </div>
    </center>