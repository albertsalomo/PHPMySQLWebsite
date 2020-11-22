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
        <a class="navbar-brand" href="home.php"><img src="../image/logo/logo.png">Pet Shop</a>
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
            <li class="nav-item">
              <a class="nav-link" href="products.php">Our Products</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Log in</a>
              </li>
          </ul>
        </div>
      </nav>
      </section>
      <!--bates nav-->

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                     <div class="card-header"><h5> <i class="fas fa-bone"></i> Register</h></div>
                        <div class="card-body">
                            <form class="form-horizontal" action="registerProcess.php" method="post">

                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                         <div class="cols-sm-10">
                                            <div class="input-group">
                                                <!--nama-->
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required="required">
                                            </div>
                                          </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <!--email-->
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required="required">
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="cols-sm-2 control-label">Username</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <!--username-->
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username (Max 30 characther)" required="required" maxlength=30>
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <!--password-->
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password (8-32 characther)" required="required" minlength="8" maxlength=32>
                                            </div>
                                        </div>
                                </div>
                                <?php 
                                  if(@$_GET['Invalid']==true)
                                  {
                                ?>
                                <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                                <?php
                                  }
                                ?>
                                <div class="form-group">
                                    <!--button-->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                </div>

                                <div class="login-register">
                                    <!--login-->
                                    <a href="login.php">Login</a>
                                </div>

                            </form>
                        </div>
                </div>
            </div>
        </div>
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