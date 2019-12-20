<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

 
  </head>
  <body>

  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">LJ<span>.</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="about.html">About</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">
            <li><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/lilianjap/"><i class="icon-linkedin"></i></a></li>
            <li><a target="_blank" rel="noopener noreferrer" href="https://github.com/lilianjap"><i class="icon-github"></i></a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Location</h5>
            <p>Stockholm, Sweden</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/lilianjap/"><i class="icon-linkedin"></i></a></li>
              <li><a target="_blank" rel="noopener noreferrer" href="https://github.com/lilianjap"><i class="icon-github"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->

  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">

                <h2>Contact</h2>
                <?php
                if ($_POST['lname']) && ($_POST['fname'] && ($_POST['message']) && ($_POST['email'])
                {
                    $to = "japlilian@gmail.com";
                    $subject = "Automatically generated messege from" . $_POST['lname'] . ' ' . $_POST['fname'];
                    $body = $_POST['message'];
                    $headers = 'To: ' . $to . "\r\n";
                    $headers .= 'From: ' . $_POST['email'];

                    // Send mail function
                    if(mail($to, $subject, $body, $headers))
                    {
                        echo '<h2>Mail sent successfuly!</h2>';
                    } else {
                        echo '<h2>Error occurred while sending the message</h2>';
                    }
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->

  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About LJ.</h4>
            <p>Based in Stockholm, Sweden. Currently working as a node js developer in Stockholm, Sweden</p>
            <p><a href="about.html">Read more...</a></p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">More Links</h4>
            <ul class="stack-link">
              <li><a href="projects.html">Projects</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2018 <a href="https://uicookies.com/">uiCookies:Black</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a> </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              <li><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/lilianjap/"><i class="icon-linkedin"></i></a></li>
              <li><a target="_blank" rel="noopener noreferrer" href="https://github.com/lilianjap"><i class="icon-github"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>


  </script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>


  <script src="js/custom.js"></script>

  </body>
</html>
