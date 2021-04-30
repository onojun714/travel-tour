<!doctype html>
<html lang="en">

<head>
  <title>Log In</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <style>

    .LoginForm {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      padding: 10px;
    }

    .form-heading {
      color: #fff;
      font-size: 23px;
    }

    .panel h2 {
      color: #444444;
      font-size: 18px;
      margin: 0 0 8px 0;
    }

    .panel p {
      color: #777777;
      font-size: 14px;
      margin-bottom: 30px;
      line-height: 24px;
    }

    .login-form .form-control {
      background: #f7f7f7 none repeat scroll 0 0;
      border: 1px solid #d4d4d4;
      border-radius: 4px;
      font-size: 14px;
      height: 50px;
      line-height: 50px;
    }

    .main-div {
      background: #ffffff none repeat scroll 0 0;
      border-radius: 2px;
      margin: 10px auto 30px;
      /* max-width: 38%; */
      padding: 50px 70px 70px 71px;
    }

    .login-form .form-group {
      margin-bottom: 10px;
    }

    .login-form {
      text-align: center;
    }

    .forgot a {
      color: #777777;
      font-size: 14px;
      text-decoration: underline;
    }

    .login-form .btn.btn-primary {
      background: #f0ad4e none repeat scroll 0 0;
      border-color: #f0ad4e;
      color: #ffffff;
      font-size: 14px;
      width: 100%;
      height: 50px;
      line-height: 50px;
      padding: 0;
    }

    .forgot {
      text-align: left;
      margin-bottom: 30px;
    }

    .botto-text {
      color: #ffffff;
      font-size: 14px;
      margin: auto;
    }

    .login-form .btn.btn-primary.reset {
      background: #ff9900 none repeat scroll 0 0;
    }

    .back {
      text-align: left;
      margin-top: 10px;
    }

    .back a {
      color: #444444;
      font-size: 13px;
      text-decoration: none;
    }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
   <div id="page-top">
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Confirm/Log In</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="register.php"><i class="fas fa-user-edit"></i> Register</a></li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>
      <!-- Masthead-->
      <header class="masthead">
          <div class="container d-flex h-100 align-items-center">
            <div class="LoginForm">
                    <div class="login-form">
                        <div class="main-div">
                            <div class="panel">
                                <h2>Admin Login</h2>
                                <p>Please enter your email and password</p>
                            </div>
                            <form action="travel-action.php" method="post" id="Login">
                                <div class="form-group">
                                  <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                  <input type="password" class="form-control" name="passw" id="inputPassword" placeholder="Password">
                                </div>
                                <div class="forgot">
                                  <a href="reset.php">Forgot password?</a>
                                </div>
                                <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
            </div>
          </div>
      </header>
   
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>