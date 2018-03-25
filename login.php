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
    <link href="bootstrap/css/floating-labels.css" rel="stylesheet">
    <link href="bootstrap/css/text-effect.css" rel="stylesheet">
    <!-- SCRIPT FILE FOR ALERTS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 </head>
<body>

<?php 

session_start();

/*VERIFYING WHETHER LOGIN FORM WAS SUBMITTED OR NOT*/
if (empty($_SESSION['user_email'])) {
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
    header('location:index.php');
}
else{
echo '<script>swal("OOPS ! Invalid Credentials", "Please Check E-Mail/Password", "error")</script>';
}

}

}
?>

    <?php include 'header.php'; ?>
    <form class="form-signin" action="" method="POST" style="padding-top: 15%;">
      <div class="text-center mb-4">
        <div class="titleWrapper">
        <h5 class="first">GST RATES</h5> <h5 class="second">PLEASE LOGIN HERE</h5>
        </div>
       
      </div>

      <div class="form-label-group">
        <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </div>

      <div class="form-label-group">
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
      </div>

      <div class="text-center col-sm-4 col-lg-12">
        <p>Not Having Account ?&emsp;<a href="register.php">Register Here</a></p>
      </div>

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In" name="user_login">
      <p class="mt-5 mb-3 text-muted text-center">GST RATES | Hanisha Karri</p>
    </form>

    

<script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="bootstrap/js/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
  jQuery(".titleWrapper").addClass("ready");
  
jQuery(".titleWrapper h5").each(function(){
  var fullString;
  var characters = jQuery(this).text().split("");
  
  $this = jQuery(this);
  $this.empty();
  $.each(characters, function (i, el) {
    if(el == " "){el = "&nbsp;"};
    $this.append("<span>" + el + "</span");
  });
    
});
  
});
</script>
</body>
</html>