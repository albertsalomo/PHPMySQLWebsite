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
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="products.php">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log in</a>
          </li>
        </ul>
      </div>
    </nav>
    </section>
<!--bates nav-->

<!-- Page Content -->
<div class="container">
    <h1 class="mt-4 mb-3">
        <i class="fas fa-shopping-bag"></i>
        Product List
    </h1>

    <hr>

    <section>
    <!-- Produk Pertama -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="../image/product/pet_food1.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>
        <?php
            require_once('connection.php');
            $sql = "SELECT * FROM product WHERE id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_title"];
              }
            } else {
              echo "0 results";
            }
            ?>
        </h3>
        <p>
        <?php
            $sql = "SELECT * FROM product WHERE id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
        </p>
        <br>
        Price
        <br>
        $ 
        <?php 
            $sql = "SELECT * FROM product WHERE id = 2";
            $result = $conn->query($sql);

            if ($result->num_rows>0)
            {
              while($row = $result->fetch_assoc())
              {
                echo $row["price"];
              }
            }
            else
            {
              echo "NULL";
            }
        
        ?>
      <form method='post' action='login.php'>
      Amount :  <input type='number' min = "1" max = "999" size='1'  value="1"/>
       <br><br>
       <button type="submit" class="btn btn-primary">
          Buy
          <br>
       </button>
      </form>
      </div>
    </div>
    <!--row-->

    <hr>

    <!-- Produk Kedua -->
    <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="../image/product/fish_food.png" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>
          <?php
            $sql = "SELECT * FROM product WHERE part = 'product2'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_title"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </h3>
          <p>
          <?php
            $sql = "SELECT * FROM product WHERE part = 'product2'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
        </p>
          </p>
          <br>
        Price
        <br>
        $ 
        <?php 
            $sql = "SELECT * FROM product WHERE id = 2";
            $result = $conn->query($sql);

            if ($result->num_rows>0)
            {
              while($row = $result->fetch_assoc())
              {
                echo $row["price"];
              }
            }
            else
            {
              echo "NULL";
            }
        
        ?>
      <form method='post' action='login.php'>
      Amount :  <input type='number' min = "1" max = "999" size='1'  value="1"/>
       <br><br>
       <button type="submit" class="btn btn-primary">
          Buy
          <br>
       </button>
      </form>
        </div>
      </div>
      <!-- /.row -->
  
    <hr>

    <!-- Produk Ketiga -->
    <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="../image/product/pet_shampoo.png" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>
          <?php
            $sql = "SELECT * FROM product WHERE part = 'product3'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_title"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </h3>
          <p>
          <?php
            $sql = "SELECT * FROM product WHERE part = 'product3'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </p>
          <br>
        Price
        <br>
        $ 
        <?php 
            $sql = "SELECT * FROM product WHERE id = 3";
            $result = $conn->query($sql);

            if ($result->num_rows>0)
            {
              while($row = $result->fetch_assoc())
              {
                echo $row["price"];
              }
            }
            else
            {
              echo "NULL";
            }    
        ?>
        <form method='post' action='login.php'>
        Amount :  <input type='number' min = "1" max = "999" size='1'  value="1"/>
        <br><br>
        <button type="submit" class="btn btn-primary">
            Buy
        <br>
        </button>
        </form>
          </div>
        </div>
      <!-- /.row -->
  
    <hr>

    <!-- Produk Keempat -->
    <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="../image/product/pet_bowl.png" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>
          <?php
            $sql = "SELECT * FROM product WHERE part = 'product4'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_title"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </h3>
          <p>
          <?php
            $sql = "SELECT * FROM product WHERE part = 'product4'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["product_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </p>
          <br>
        Price
        <br>
        $ 
        <?php 
            $sql = "SELECT * FROM product WHERE id = 4";
            $result = $conn->query($sql);

            if ($result->num_rows>0)
            {
              while($row = $result->fetch_assoc())
              {
                echo $row["price"];
              }
            }
            else
            {
              echo "NULL";
            }
        
        ?>
        <form method='post' action='login.php'>
        Amount :  <input type='number' min = "1" max = "999" size='1'  value="1"/>
       <br><br>
       <button type="submit" class="btn btn-primary">
          Buy
          <br>
       </button>
      </form>
        </div>
      </div>
      <!-- /.row -->
  
    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->
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

  </body>
</html>