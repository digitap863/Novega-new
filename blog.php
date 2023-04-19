<!DOCTYPE HTML>
<html lang="en">
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Go.arch  - Architecture HTML Template</title> 

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>
  
    <!-- Loader -->

    <div class="loader">
      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="loader-brand"> 
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>
    </div>

    <!-- Header -->

    <header id="top" class="header-home">
      <div class="brand-panel">
        <a href="#top" class="brand js-target-scroll">
          <img src="./img/Novega_LogoOnly_white-02.png" style="    width: 10rem;
            margin-top: -54px;
            height: auto;
            margin-left: -34px;" />
        </a>
        <div class="brand-name">NOVEGA</div>
        <div class="slide-number">
          <span class="current-number text-primary">0<span class="count">1</span></span>
          <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
      </div>
      <div class="header-phone">+97440011415</div>
      <div class="vertical-panel"></div>
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
          <div class="vertical-panel-title">TRADING &and; CONSTRUCTION</div>
          <div class="line"></div>
        </div>
        <ul class="social-list">
          <li><a href="" class="fa fa-instagram"></a></li>
          <li><a href="" class="fa fa-twitter"></a></li>
          <li><a href="" class="fa fa-behance"></a></li>
          <li><a href="" class="fa fa-facebook"></a></li>
        </ul>
      </div>
  
      <!-- Navigation Desctop -->
  
      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="#top" class="brand js-target-scroll">
            NO<span class="text-primary"></span>VEGA
          </a>
          <ul class="navbar-desctop-menu">
            <li >
              <a href="index.php">Home</a>
   
            </li>
            <li>
              <a href="about.php">About us</a>
            </li>
            <li>
              <a href="services.php">Services</a>
            </li>
            <li>
              <a href="projects.php">Projects</a>
    
            </li>
    
            <li class="active">
              <a href="blog.php">Blog</a>
     
            </li>
            <li>
              <a href="contacts.html">Contacts</a>
            </li>
          </ul>
        </div>
      </nav>
  
      <!-- Navigation Mobile -->
  
      <nav class="navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
          NO<span class="text-primary"></span>VEGA
        </a>
  
        <!-- Navbar Collapse -->
  
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="navbar-nav-mobile">
            <li >
              <a href="index.php">Home </i></a>
            </li>
            <li>
              <a href="about.php">About us</a>
            </li>
            <li>
              <a href="about.php">Services</a>
            </li>
            <li>
              <a href="projects.php">Projects </i></a>
       
            </li>
            <li class="active">
              <a href="blog.php">Blog</i></a>
       
            </li>
            <li>
              <a href="contacts.html">Contacts</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

  <!-- Layout -->

  <div class="layout">
    
    <!-- Home -->
    
    <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>Blog</h1>
        </header>
      </div>

      <!-- Lines -->

      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </main>

    <div class="content">   
    
      <!-- Blog List  -->

      <section class="blog-list">
        <div class="container">
        <?php
        include("./admin/connection.php");
        $project_view_query="Select * from blog";
        $result=mysqli_query($connect,$project_view_query);
        if($result){
          while($data=mysqli_fetch_assoc($result)){
          $id=$data['No'];
          $name=$data['Name'];
          $date=$data['Date'];
          $description=$data['Description'];
          $image=$data['Image'];
          $slicedString = substr($description, 0, 97);
    
          echo "
          <article class='blog'>
          <div class='row'>
            <div class='blog-thumbnail col-md-8'>
              <div class='blog-thumbnail-bg col-md-8 visible-md visible-lg' style='background-image:url(admin/$image);'></div>
              <div class='blog-thumbnail-img visible-xs visible-sm'><img alt='' class='img-responsive' src=admin/$image></div>
            </div>
            <div class='blog-info col-md-4'>
              <h3 class='blog-title'>
                <a href=''>$name</a>
              </h3>
              <p>$slicedString</p>
              <div class='blog-meta'>
                <div class='time'>$date</div>
              </div>
              <div class='text-right'><a href='blog-details.php?blog=$id' class='read-more'>Read more</a></div>
            </div>
          </div>
        </article>";
          
       
          }}
 
          ?>

        </div>
      </section>

      <!-- Contacts -->

      <section class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
            <strong class="fade-title-right">contacts</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                +97440011415
                <br>
                +97440011415
                <br>
                info@novega.com<br>
                Doha,Qatar
              </div>
              <div class="col-base  col-md-8">
                <form class="js-ajax-form">
                  <div class="row-field row">
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Email *">
                      </div>
                    </div>
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="Company">
                      </div>
                    </div>
                    <div class="col-field col-sm-12 col-md-4">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-message col-field col-sm-12">
                      <div class="form-group">
                        <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message
                          is successfully sent...</div>
                        <div class="error-message">We're sorry, but something went wrong</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-submit text-right"><button type="submit" class="btn btn-shadow-2 wow swing">Send <i
                        class="icon-next"></i></button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->

      <footer id="footer" class="footer">
        <div class="container">
          <div class="row-base row">
            <div class="col-base text-left-md col-md-4">
              <a href="#" class="brand">
                NO<span class="text-primary"></span>VEGA
              </a>
            </div>
            <div class="text-center-md col-base col-md-4">
              <a href="https://themeforest.net/user/murren20" class="author-link">
                by TD
              </a>
            </div>
            <div class="text-right-md col-base col-md-4">
              © Novega 2023 All Rights Reserved.
            </div>
          </div>
        </div>
      </footer>

      <!-- Lines -->

      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- SCRIPTS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/interface.js"></script> 
</body>
</html>