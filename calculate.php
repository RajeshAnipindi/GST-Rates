<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GSTRATES | 2018</title>
    <style type="text/css">
      input::-webkit-input-placeholder {
      color: #000000 !important;
      }
      input:-moz-placeholder { /* Firefox 18- */
      color: #000000 !important; 
      }
      input::-moz-placeholder {  /* Firefox 19+ */
      color: #000000 !important; 
      }
      input:-ms-input-placeholder { 
      color: #000000 !important; 
      }
    </style>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <!-- SCRIPT FILE FOR ALERTS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 </head>
<body>

<?php 

session_start();

/*VERIFYING WHETHER HOSPITAL LOGIN FORM WAS SUBMITTED OR NOT*/
if (!empty($_SESSION['user_email'])) {
if (isset($_POST['user_login']) && !empty($_POST['user_login'])){
require 'connection.php';  
$username = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$loginquery = "SELECT * FROM users WHERE email='$username' AND password='$password'";
$loginresult = mysql_query($loginquery);
$rowcount = mysql_num_rows($loginresult);
while ($row = mysql_fetch_assoc($loginresult)) {
$user_email = $row['email'];
$user_name = $row['name'];
$user_address = $row['address'];
$user_pincode = $row['pincode'];
$user_mobile = $row['mobile'];
}
if($rowcount == 1){
    $_SESSION['user_email'] = $user_email;
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user_address'] = $user_address;
    $_SESSION['user_pincode'] = $user_pincode;
    $_SESSION['user_mobile'] = $user_mobile;
    header('location:cgst.php');
}
else{
echo '<script>swal("OOPS ! Invalid Credentials", "Please Check E-Mail/Password", "error")</script>';
}

}

}
?>

    <?php include 'header.php'; ?>

    <form class="form-signin col-md-12" action="" method="POST" style="padding-top: 15%;">
      <div class="text-center mb-4">
       <h1 class="h3 mb-3 font-weight-normal">CALCULATE GST HERE</h1>
      </div>

    <div class="container">
 
     <div class="row">
      <div class="col-md-4">
      <div class="form-label-group">
      <input type="text" name="price" class="form-control" placeholder="Enter Amount" required autofocus>
      </div>
      </div>
   
    
    <div class="col-md-4">
         <div class="form-label-group">
          <select class="form-control" name="type" required>
          <option value="1">Clothing < Rs.1000</option>
          <option value="2">Clothing > Rs.1000</option>
          <option value="3">Solar and Bio Gas Products</option>
          <option value="4">Electric motors,generators and rotary converters</option>
          <option value="5">Animal blood used for some diagonistic uses</option>
          <option value="6">Mobile phones and any smart devices</option>
          <option value="7">Human blood and its components</option>
          <option value="8">Any kind of batteries(or battery related) and electric accumulators</option>
          <option value="9">Domestic appliances</option>
          <option value="10">Hair Products</option>
        </select>
     </div>
</div>
<div class="col-md-4"> 
     <input class="btn btn-lg btn-primary btn-block" type="submit" value="CALCULATE" name="gst_calculate">  
</div>
</div>
     
    </form>
</div>
</div>
  
<div class="text-center mb-4" style="padding-top: 5%;">
       <h4 class="h3 mb-3 font-weight-normal">YOUR BUCKET (ITEM NAME ---- GST ---- ENTERED PRICE ----- TOTAL PRICE</h4>
</div>
<?php
require 'connection.php';
if(isset($_POST['gst_calculate']) && !empty($_POST['gst_calculate'])){

if(empty($_SESSION["cart"])){
$_SESSION["cart"] = array();
} 
$type = $_POST['type'];
$price = $_POST["price"];

$result= mysql_query("SELECT * FROM tblproduct WHERE code='$type'");
while ($row = mysql_fetch_assoc($result)) {
  $itemname = $row["name"];
  $itemgst = $row["price"];
  $calculation = ($itemgst * $price)/100;
  $total = $calculation + $price;
array_push($_SESSION["cart"], array("items" => array ("name" => $itemname,"gst" => $itemgst,"price"=>$price, "total=>$total")));
}

foreach ($_SESSION["cart"] as $item) {
echo '<tr>';
  foreach ($item as $key => $value) {
    $answer = implode(" ---- ", $value);
}
print '<td>'.$answer.'</td><br>';
}
?>
</tr>
</table>
<?php } ?>




<p class="mt-5 mb-3 text-muted text-center">GST RATES | Hanisha Karri</p>
<script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="bootstrap/js/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
