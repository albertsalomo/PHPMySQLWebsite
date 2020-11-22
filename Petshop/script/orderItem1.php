<?php
    session_start();

    if(isset($_SESSION['User']))
    {
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Javascript-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--CSS refereence-->
    <link rel="stylesheet" href="../style/style.css">

    <!--Icon CDN-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
    <!--Footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

    <title>Pet Shop</title>
  </head>

<body>
 <!--Navbar-->
 <section id="nav-bar">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
      <a class="navbar-brand" href="admin_home.php"><img src="../image/logo/logo.png">Pet Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto"> <!--ml buat margin dikiri, mr buat margin dikanan-->
          <li class="nav-item">
            <a class="nav-link" href="user_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_contact.php">Contact Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="user_products.php">Our Products</a>
          </li>
          <li class="nav-item">
          <div class="btn-group">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> <?php echo $_SESSION['User'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php?logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
        </div>
          </li>
        </ul>
      </div>
    </nav>
    </section>
        <!-- bates nav -->
<div class="container">

<?php 
require_once('connection.php');
date_default_timezone_set('Asia/Jakarta');

$date = date("Y-m-d H:i:s");
//$total = $_POST['item'] * 

$sql = "INSERT INTO transaction (order_id, username, product_id, amount, order_time)
VALUES ('', '$_SESSION[User]', '1', '$_POST[item]', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "Your order has been recorded";
  ?>
  <br><br>
    <a class="btn btn-primary" href="user_products.php" role="button">< Back</a>
  <?php

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

</div>
    



</body>
</html>

<?php
    }
    else
    {
        header("location:login.php");
    }
?>