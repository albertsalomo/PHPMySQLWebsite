<?php
    session_start();

    if(isset($_SESSION['admin']))
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
            <a class="nav-link" href="admin_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_about.php">About Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin_contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_products.php">Our Products</a>
          </li>
          <li class="nav-item">
          <div class="btn-group">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> <?php echo $_SESSION['admin'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="editdata.php"><i class="fas fa-cog"></i> Edit data</a>
          <a class="dropdown-item" href="logout.php?logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
        </div>
          </li>
        </ul>
      </div>
    </nav>
    </section>
  <!--bates nav-->

  <div class="container">

  <h2>
  <i class="fas fa-phone-alt"></i></i>
    Contact Us
  </h2>
  <section>
    <div class="row">
      <div class="col-lg-7 mb-7">
        <div class="card h-100 text-center">
          <div class="card-body">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" 
            id="gmap_canvas" src="https://maps.google.com/maps?q=ukrida&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">
            fmovie io</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas 
            {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
          </div>
      </div>

      <div class="col-lg-5 mb-5">
        <div class="card h-100 text-center">
          <div class="card-body">
          <h6>Contact Information</h>
          <hr>
          <i class="fas fa-envelope"></i> Email : 
          <?php
            require_once('connection.php');
            $sql = "SELECT * FROM contact WHERE part = 'email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["contact_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          <hr>
          <i class="fas fa-address-card"></i> Address : 
          <?php
            $sql = "SELECT * FROM contact WHERE part = 'address'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["contact_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          <hr>
          <i class="fas fa-phone-square-alt"></i> Phone Number : 
          <?php
            $sql = "SELECT * FROM contact WHERE part = 'phone_number'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["contact_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          <hr>
          <br>
          <br>
          Follow me
          <hr>
          <div class="contact-box">
          <a href="https://www.instagram.com/albertsalomo/?hl=en"><i class="fab fa-instagram"></i></a>
          <?php
            $sql = "SELECT * FROM contact WHERE part = 'instagram'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["contact_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          <br><br><br>
          <a href="https://www.facebook.com/agemini123/"><i class="fab fa-facebook"></i></a> 
          <?php
            $sql = "SELECT * FROM contact WHERE part = 'facebook'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["contact_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </div>
        </div>
      </div>
      </div>

    </div>
    </section>
</div>
    <!--bates-->
  </body>

  <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
    <div class="container">
    <div class="row">
      <div class="col-md-12 copy">
        <p class="text-center">&copy; Copyright 2020 - PetShop.  All rights reserved.</p>
      </div>
    </div>
  
  
    </div>
    </div>
  </footer>
</html>

<?php
    }
    else
    {
        header("location:login.php");
    }
?>