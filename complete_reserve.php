<?php 
include 'travel-action.php';                                                  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Complete Reservation</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><i class="fas fa-plane"></i> Travel Tour</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#search"><i class="fas fa-search"></i></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#projects">Tour Contents</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#signup">About Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact_us.php">Contact Us</a></li>
                        <?php if(empty($_SESSION)){ ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Confirm/Log In</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="register.php"><i class="fas fa-user-edit"></i> Register</a></li>
                    <?php
                    }else{
                     echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="Update_mem.php">Member info</a></li>';
                     echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Logout</a></li>';
                    } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <!-- <h1 class="mx-auto my-0 text-uppercase">Japan Heritage Tour</h1> -->
                    <h2 class="text-white-50 mx-auto mt-2 mb-2">Your Reservation is complete.</h2>
                    <h2 class="text-white-50 mx-auto mb-5">Thank you for your Reservation!</h2>
                    <a class="btn btn-primary js-scroll-trigger mr-3" href="login.php">Log In Page</a>
                    <a class="btn btn-primary js-scroll-trigger" href="index.php#projects">Search a Tour</a>
                </div>
            </div>
        </header>
 
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Japan Heritage Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>