<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select a.first_name, b.account_number ,b.account_type,c.balance,d.transaction_date,d.transaction_id, e.bank_name,e.branch_location
    from user a, account b,card c, transaction d, bank e
    where a.user_id=b.user_id and
    b.user_id=c.user_id and
    a.user_id=c.user_id and
    d.user_id=b.user_id and
    e.account=b.account_number and
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
      </div> <!-- /demo-headline -->
      

        
    <div class="container">
        <div class="banner-image">
            <div class="row">
                 <div class="col-lg-5 col-lg-offset-2">
                     <h7><br><Br><b>  Name: <?php echo $row['first_name']; ?></b><br> <br></h7>
            
          
                     <h7><b>Account_Number: <?php echo $row['account_number']; ?></h7></div>
                      <br>
                 </div>
                 
                        
<div class="container1">
     <div class="row">
         <h7><br> <b><div class="col-xs-4">Name: </div>
                        <div class="col-xs-10"><?php echo $row['first_name']; ?> </div></b></h7>
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-4">Account Number: </div>
                        <div class="col-xs-10"><?php echo $row['account_number']; ?> </div></b></h7><br>
            </div>
    <div class="row">
          
                        <h7> <b><div class="col-xs-4">Account Type:  </div>
                                <div class="col-xs-10"><?php echo $row['account_type']; ?></div></b></h7><br>
                    
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-4">Balance: </div>
                        <div class="col-xs-10"><?php echo $row['balance']; ?> </div></b></h7> </h7>
        </div>
    <div class="row">
        <h9><b><div class="col-xs-4">Transaction date: </div></h9>
        <h7>   <div class="col-xs-10"><?php echo $row["transaction_date"]; ?> </div></b></h7> 
        </div>
    <div class="row">
        <h9> <b><div class="col-xs-4">Transaction id: </div></h9>
        <h7> <div class="col-xs-10"><?php echo $row['transaction_id']; ?> </div></b></h7>
    </div>
    <div class="row">
        <h9><b><div class="col-xs-4">Bank Name: </div></h9>
        <h7>   <div class="col-xs-10"><?php echo $row["bank_name"]; ?> </div></b></h7> 
        </div>
    <div class="row">
        <h9><b><div class="col-xs-4">Branch Location: </div></h9>
        <h7>   <div class="col-xs-10"><?php echo $row["branch_location"]; ?> </div></b></h7> 
        </div><br>
        <center><a href="index.php" class="btn btn-block btn-lg btn-primary text-uppercase">Exit</a></center>
</div>