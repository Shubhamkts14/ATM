<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$account=$_POST['account'];
$amount=$_POST['amount'];
$select_query="update account set balance=balance+$amount "
        . "where account_number=$account";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query="update account set balance=balance-$amount where user_id in (select user_id from card where card_pin=$pin)";
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
      
            <div class="container">
        <div class="padding">
    <table>
            <tbody>
            <th><h1>
                    <br><br><br>Transaction Successful.Click here the check balance<br><br><br><br>
                </h1>
            </th>
                <tr>
                    <td>
                        <a href="balance.php" class="button">View my Balance</a> <br><br><br> &emsp; 
                    </td>
                    <td>
                        <a href="index.php" class="button">Exit</a><br><br><br> &emsp;
                    </td>
                </tr>
        </div>
     </div>
    </body>
    </html>
        </div>
    </div>
