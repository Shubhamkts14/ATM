<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$admin_id=$_POST['admin_id'];
$_SESSION['admin_id']=$admin_id;
$admin_pin=$_POST['admin_pin'];
$atm_id=$_POST['atm_id'];
$_SESSION['atm_id']=$atm_id;
$select_query="select admin_id, admin_pin from admin where admin_id=$admin_id and admin_pin=$admin_pin";
$select_query="select a.atm_id,a.atm_location,a.available_cash from atm a where atm_id=$atm_id";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num = mysqli_num_rows($select_query_result);
    if ($num == 0) {
        echo"<script>
alert('Incorrect Id or Pin');
window.location.href='admin.php';
</script>";
} else {  
  $row = mysqli_fetch_array($select_query_result);
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
         <h7><br><Br><Br <b><div class="col-xs-2">Atm id: </div>
                        <div class="col-xs-10"><?php echo $row['atm_id']; ?> </div><br><br></b></h7><br>
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-2">Atm Location: </div>
                        <div class="col-xs-10"><?php echo $row['atm_location']; ?> </div><br><br></b></h7><br>
            </div>
    <div class="row">
          
                        <h7> <b><div class="col-xs-2">Available Cash:  </div>
                                <div class="col-xs-10"><?php echo $row['available_cash']; ?></div></b><br><br></h7><br>
                    
            </div>
            
<div class="container">
        <div class="padding">
        <table>
            <tbody>
            <th><h1>
                        Admin Options<br><br>
                </h1>
            </th>
                <tr>
                    <td>
                        <a href="addcash.php" class="button">Add cash</a> <br><br><br> &emsp; 
                    </td>
                    <td>
                        <a href="summary.php" class="button">Transaction Summary</a><br><br><br> &emsp;
                    </td>
                </tr>
                
          
            </tbody>
        </table>
    </div>
    </div>
            
</body>
    </html>