<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.png">
  <!-- Bootstrap CSS -->
  <link href="../css/cssreset.css" rel="stylesheet" />
  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../css/main.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/cbdf2b0f0e.js" crossorigin="anonymous"></script>
  <title>TRAIL - Package Tracking</title>
</head>

<body>
  <section>
    <header>
      <!--- Navbar --->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand text-white" href="index.php"><i class="fas fa-lg fa-shipping-fast mr-2"></i>TRAIL Logistics</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item pl-1">
                <a class="nav-link" href="../index.php"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
              </li>
              <li class="nav-item pl-1">
                <a class="nav-link" href="services.php"><i class="fa fa-th-list fa-fw mr-1"></i>Services</a>
              </li>
              <li class="nav-item pl-1">
                <a class="nav-link" href="about.php"><i class="fa fa-info-circle fa-fw mr-1"></i>About Us</a>
              </li>
              <li class="nav-item pl-1">
                <a class="nav-link" href="contact.php"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact Us</a>
              </li>
              <li class="nav-item bg-primary active pl-1">
                <a class="nav-link" href="tracking.php"><i class="fas fa-route fa-fw mr-1"></i>Track & Trace</a>
              </li>
              <li class="nav-item bg-danger pl-1">
                <a class="nav-link" href="../admin/login-exec.php"><i class="fas fa-user fa-fw mr-1"></i>Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--# Navbar #-->
    </header>
  </section>
  <section class="page-title-secttion">
    <div class="container">
      <div class="page-header">
        <h1>Track A Parcel</h1>
      </div>
      <ol class="breadcrumb justify-content-center">
        <li><a href="../index.php">Home </a></li>
        <li class="active">/ Track A Parcel</li>
      </ol>
    </div>
  </section>
  <div class="container">
    <h2 class="my-3">Track Parcel</h2>
    <p>
      <?php
      if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
        echo '<p class="alert-danger">';
        foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
          echo $msg;
        }
        echo '</p>';
        unset($_SESSION['ERRMSG_ARR']);
      }
      ?>
    </p><br>
    <div class="w-100 tracking-form mx-auto border">
      <h3 class="text-center my-4">Enter Tracking Number</h3> <br />
      <form action="../controllers/tracking_exec.php" method="POST" name="tracking" class="form-inline d-flex justify-content-center mb-4">
        <input type="text" class="form-control mb-2 mr-sm-2" name="trackingnumber" id="inlineFormInputName2" placeholder="001234567" required>
        <button type="submit" class="btn btn-primary mb-2">Track</button>
      </form>
    </div>
    <div class="row my-5">
      <div class="w-75 mx-auto">
        <img class="img-responsive w-100" src="APS_28-New.jpg" alt="thumb">
      </div>
    </div>
  </div>

  <section class="footer-widget-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer-widget">
            <h3>About</h3>
            <p>TRAIL Logistics is a representative logistics operator providing full range of service in the sphere of customs cargo and
              transportation worldwide.
            </p>
            <br>

            <address>
              <strong>+1 (661) 769-6-179</strong>
              <br>
              <a href="#">customerservice@trail.com</a>
              <br>
              <br>
              <span class="map-marker">384 Maple Circle<br>Simi Valley Nevada, 24757</span>
            </address>


          </div><!-- /.footer-widget -->
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-4">
          <div class="footer-widget">
            <h3>Useful Links</h3>
            <div class="row">
              <div class="col-sm-6">
                <ul class="quick-links">
                  <li><a href="about.php">About us</a></li>
                  
                  <li><a href="contact.php">Contact</a></li>
                  
                  <li><a href="#">Staff</a></li>
                  
                  <li><a href="#">Support</a></li>
                </ul>
              </div>
              
            </div>
          </div><!-- /.footer-widget -->
        </div><!-- /.col-md-4 -->

        <div class="col-sm-4">
          <div class="footer-widget">
            <h3>Stay in Touch</h3>
            <p>Enter your email address to receive news &amp; offers from us</p>

            <form class="newsletter-form">
              <div class="form-group">
                <label class="sr-only" for="InputEmail1">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
                <button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
              </div>
            </form>
            <ul class="social-links list-inline">
              <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div><!-- /.footer-widget -->
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
  <footer class="copyright-section">
    <div class="container">
      <div class="footer-menu">
        <ul>
          <li><a href="#">Privacy &amp; Cookies</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Accessibility</a></li>
        </ul>
      </div>

      <div class="copyright-info">
        <span>Copyright © 2024 TRAIL. All Rights Reserved. Designed by <a href="#">E.M.T</a><br></span>
      </div>
    </div><!-- /.container -->
  </footer>

  <!--- Footer --->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>