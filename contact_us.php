<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        body{
          background-color: #25274d;
        }
        .contact{
          padding: 4%;
          margin-top: 2%;
          height: 400px;
        }
        .col-md-3{
          background: #59a8ec;
          padding: 4%;
          border-top-left-radius: 0.5rem;
          border-bottom-left-radius: 0.5rem;
        }
        .contact-info{
          margin-top:10%;
        }
        .contact-info img{
          margin-bottom: 15%;
        }
        .contact-info h2{
          margin-bottom: 10%;
        }
        .col-md-9{
          background: #fff;
          padding: 3%;
          border-top-right-radius: 0.5rem;
          border-bottom-right-radius: 0.5rem;
        }
        .contact-form label{
          font-weight:600;
        }
        .contact-form button{
          background: #25274d;
          color: #fff;
          font-weight: 600;
          width: 25%;
        }
        .contact-form button:focus{
          box-shadow:none;
        }
    </style>
  </head>

  <body>
    <?php
      $page_flag = 0;
      if (!empty($_POST['send_fb'])){
        $page_flag = 1;
      }elseif (!empty($_POST['send_fb'])){
        $page_flag = 2;
      }
    ?>

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


<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
      <form action="confirm_contact.php" method="post">
          <div class="contact-form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="fname">First Name:</label>
              <div class="col-sm-10">          
              <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lname">Last Name:</label>
              <div class="col-sm-10">          
              <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="comment">Comment:</label>
              <div class="col-sm-10">
              <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="send_confirm" class="btn btn-default">Confirm</button>
              </div>
            </div>
          </div>
        </form>
		</div>
	</div>       
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>