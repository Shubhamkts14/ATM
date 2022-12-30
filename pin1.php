<?php 
 $con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
 session_start();
$pin= $_POST['Pin'];
$_SESSION['Pin']=$pin;
$select_query="select a.first_name, b.account_number from user a, account b "
        . "where b.user_id = a.user_id and a.user_id in"
        . " (select user_id from account where user_id="
        . "(select user_id from card where card_pin=$pin)) ";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num= mysqli_num_rows($select_query_result);
if($num==0){
    
    echo"<script>
alert('Incorrect Pin');
window.location.href='pin.php';
</script>";
}
else{
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
        <div class="banner-image">
            <div class="row">
                 <div class="col-lg-5 col-lg-offset-2">
                     <h7><br><Br><b>  Name: <?php echo $row['first_name']; ?></b><br> <br></h7>
            
          
                     <h7><b>Account_Number: <?php echo $row['account_number']; ?></h7></div>
                 </div>
                 <div class="row">
                    <div class="col-xs-12" id="screenView">
                      <!-- Place <h1></h1> below -->
                      <h1 class="demo-section-title text-uppercase text-center">Options</h1>
                      
                       <div class="row">
                        </div>
                        </div>
    <div class="container">
        <div class="padding">
        <table>
            <tbody>
            <th><h1>
                        Please select an option<br><br>
                </h1>
            </th>
                <tr>
                    <td>
                        <a href="balance.php" class="button">Balance Enquiry</a> <br><br><br> &emsp; 
                    </td>
                    <td>
                        <a href="cash.php" class="button">Cash Withdrawal</a><br><br><br> &emsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="pinchange.php" class="button">Pin Change</a><br><br><br>&emsp;
                    </td>
                    <td>
                        <a href="fastcash.php" class="button">Fast Cash</a><br><br><br>&emsp;
                </td>
                </tr>
                 <tr>
                    <td>
                        <a href="mini.php" class="button">Mini-Statement</a><br><br><br>&emsp;
                    </td>
                    <td>
                        <a href="fundtransfer.php" class="button">Funds Transfer</a><br><br><br>&emsp;
                </td>
                </tr>
          
            </tbody>
        </table>
    </div>
    </div>
            
</body>
    </html>
     
