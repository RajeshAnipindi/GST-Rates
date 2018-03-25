<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<div class="container">
      <a class="navbar-brand" href="#">GST RATES</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <?php 
            if (!empty($_SESSION['user_email'])) {
            echo 
            '<li class="nav-item">
            <a class="nav-link" href="#">Welcome ! '.$_SESSION['user_email'].'</a>
            </li>';
            }
            echo 
            '<li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
            <div class="dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.php">Modules</a>
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="cgst.php">CGST</a>
            <a class="dropdown-item" href="igst.php">IGST</a>
            <a class="dropdown-item" href="sgst.php">SGST</a>
            </div>
          </div>
            </li>';
          if (!empty($_SESSION['user_email'])) {
            echo '<li class="nav-item">
            <a class="nav-link" href="calculate.php">Calculate</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
            </li>';
          }
          else{
            echo '
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
            </li>';
          }
            
          ?>
        </ul>
      </div>
  </div>
</nav>

