<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select a.first_name, b.account_number ,b.account_type,c.balance
    from user a, account b,card c
    where a.user_id=b.user_id and
    b.user_id=c.user_id and
    a.user_id=c.user_id and 
    c.card_pin=$pin;";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
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
      </div> 
<div class="container">
     <div class="row">
         <h7><br><Br><Br <b><div class="col-xs-2">Name: </div>
                        <div class="col-xs-10"><?php echo $row['first_name']; ?> </div><br><br></b></h7><br>
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-4">Account Number: </div>
                        <div class="col-xs-10"><?php echo $row['account_number']; ?> </div><br><br></b></h7><br>
            </div>
    <div class="row">
          
                        <h7> <b><div class="col-xs-2">Account Type:  </div>
                                <div class="col-xs-10"><?php echo $row['account_type']; ?></div></b><br><br></h7><br>
                    
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-2">Balance: </div>
                        <div class="col-xs-10"><?php echo $row['balance']; ?> </div><br><br></b></h7> </h7>
        </div>
    <a href="index.php" class="btn btn-lg btn-danger text-uppercase btn-padding">Exit</a>
</div>
   
</body>
</html>

