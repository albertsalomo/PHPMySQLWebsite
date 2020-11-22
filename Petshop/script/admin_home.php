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
          <li class="nav-item active">
            <a class="nav-link" href="admin_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_about.php">About Us</a>
          </li>
          <li class="nav-item">
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
        <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown">
          <a class="dropdown-item ml-auto" href="editdata.php"><i class="fas fa-cog"></i> Edit data</a>
          <a class="dropdown-item ml-auto" href="logout.php?logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
        </div>
          </li>
        </ul>
      </div>
    </nav>
    </section>
    <!--bates nav-->




<div class="container"> 
<section>
      <h1 class="my-4">
        <i class="fas fa-home"></i>
        Home
      </h1>

        <!--Carousel Bates-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../image/wallpaper/cat_image.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Welcome to our website</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../image/wallpaper/black-cat.png" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Search our website through the navbar section</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../image/wallpaper/dog.png" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Enjoy. . . :D</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    <div class="card mb-4">
      <div class="card-body">
          <div class="col-lg-12">
            <h2 class="card-title">This is our homepage</h2>
            <p class="card-text">
            <?php
            require_once('connection.php');
            $sql = "SELECT * FROM home WHERE part = 'Sub Homepage'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row["home_text"];
              }
            } else {
              echo "0 results";
            }
            ?>
              </p>
          </div>
        </div>
      </div>
  
      <!-- Article -->
      <h2>Some Article</h2>
  
      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../image/news/news_1.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'ArticleTitle 1'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </h4>
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'Article 1'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </p><br><br>
                <div class="btn-article">
                  <button type="button" class="btn btn-primary">
                    <a href="https://nypost.com/2020/09/26/nyc-woman-sues-pet-shop-for-not-letting-her-take-poodle-home/">
                    Read More >
                  </a>
                </button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../image/news/news_2.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'ArticleTitle 2'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
                </a>
              </h4>
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'Article 2'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </p><br>
                <div class="btn-article">
                  <button type="button" class="btn btn-primary">
                    <a href="https://www.dailymail.co.uk/news/article-8784053/In-changing-Saudi-Arabia-dog-cafe-delights-pet-lovers.html">
                    Read More >
                  </a>
                </button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="../image/news/news_3.png" alt="">
            <div class="card-body">
              <h4 class="card-title">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'ArticleTitle 3'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </h4>
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'Article 3'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </p><br><br>
                <div class="btn-article">
                  <button type="button" class="btn btn-primary"><a href="https://timesofindia.indiatimes.com/most-searched-products/pet-products/dogs/dog-wipes-that-are-perfect-for-your-four-legged-baby/articleshow/76866900.cms">
                    Read More >
                  </a>
                </button>
                </div>
            
            </div>
          </div>
        </div>

         <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="../image/news/news_4.png" alt="">
            <div class="card-body">
              <h4 class="card-title">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'ArticleTitle 4'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </h4>
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'Article 4'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              
              </p><br><br><br>
                <div class="btn-article">
                  <button type="button" class="btn btn-primary">
                    <a href="https://timesofindia.indiatimes.com/city/mumbai/pet-shops-in-mumbai-could-turn-coffins-for-animals/articleshow/74820238.cms">Read More >
                  </a>
                </button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="../image/news/news_5.png" height="200px" alt="">
            <div class="card-body">
              <h4 class="card-title">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'ArticleTitle 5'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </h4>
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'Article 5'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </p>
                <div class="btn-article">
                  <button type="button" class="btn btn-primary">
                    <a href="https://www.sciencefocus.com/nature/cat-facts-science/">Read More >
                  </a>
                </button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="../image/news/news_6.png" alt="">
            <div class="card-body">
              <h4 class="card-title">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'ArticleTitle 6'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </h4>
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM home WHERE part = 'Article 6'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo $row["home_text"];
                }
              } else {
                echo "0 results";
              }
              ?>
              </p><br><br>
                <div class="btn-article">
                  <button type="button" class="btn btn-primary">
                    <a href="https://www.independent.co.uk/arts-entertainment/animals-people-rescue-each-other-in-heartfelt-docuseries-richard-linklater-child-ap-people-animals-b1209555.html">Read More >
                  </a>
                </button>
                </div>
            </div>
          </div>
        </div>
      <!-- /.row -->
  </div>
  </section>

  </div>
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

<?php
    }
    else
    {
        header("location:login.php");
    }
?>