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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--CSS refereence-->
    <link rel="stylesheet" href="../style/style.css">

    <!--Icon CDN-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!--Footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
                <ul class="navbar-nav ml-auto">
                    <!--ml buat margin dikiri, mr buat margin dikanan-->
                    <li class="nav-item">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> <?php echo $_SESSION['admin']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="editdata.php"><i class="fas fa-cog"></i> Edit data</a>
                            <a class="dropdown-item" href="logout.php?logout"><i class="fas fa-sign-out-alt"></i> Log
                                out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!--bates nav-->


    <div class="container">
        <div class="col-md-8">
            <div class="statustxt">
                Account List
            </div>
            <?php
            require_once('connection.php');
            $sql = "SELECT * FROM user_data";
            $result = $conn->query($sql);
            echo '<table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">user_id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">username</th>
                        <th scope="col">delete</th>
                      </tr>
                    </thead>
                    <tbody>';
          
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) 
              {?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <form class="form-horizontal" action="deleteAccProcess.php" method="post">
                    <td><button type="submit" name="deleteBtn" value="<?php echo $row['id'] ?>"
                            class="btn btn-outline-danger">
                            Delete
                </form>
                </button></td>
            </tr>
            <?php } ?>
            <?php
              echo "</table>";
              }
            else 
              {
              echo "0 results";
              }
              ?>
            <div class="row">
                <a class="btn btn-primary" href="editdata.php" role="button">
                    < Back</a>
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