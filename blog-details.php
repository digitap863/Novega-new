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

    <!-- <div class="loader"> -->
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
              <a href="projects.php">Projects</i></a>

            </li>
            <li class="active">
              <a href="blog.php">Blog </i></a>
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
      <!-- <div class="container">
        <header class="main-header">
          <h1>Blog details</h1>
        </header>
      </div> -->

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
    
      <!-- Blog Details -->

      <section class="blog-details">
        <div class="container">
          <div class="row">
            <div class="col-primary col-md-8">
            <?php 
include("./admin/connection.php");
if(isset($_GET['blog'])){
    $id=$_GET['blog'];
    $delete_query="select * from blog where No='$id'";
    $result=mysqli_query($connect,$delete_query);
    $data=mysqli_fetch_assoc($result);
      $id=$data['No'];
      $name=$data['Name'];
      $date=$data['Date'];
      $description=$data['Description'];
      $image=$data['Image'];
    echo "
    <article class='post'>
    <header class='post-header'>
      <h3>$name</h3>
      <div class='blog-meta'>
      
        <div class='time'>$date</div>
      </div>
    </header>
    <div class='post-thumbnail'>
      <img alt='' class='img-responsive' src='admin/$image'>
    </div>
    <p>$description</p>

  </article>
    ";
   
}
?>




        
            </div>
            <div class="col-secondary col-md-4">
              <div class="widget widget_recent_post">
                <h3 class="widget-title">Recent Post</h3>

                <?php
        include("./admin/connection.php");
        $project_view_query="Select * from blog";
        $result=mysqli_query($connect,$project_view_query);
        if($result){
          while($data=mysqli_fetch_assoc($result)){
          $id=$data['No'];
          $params=$_GET['blog'];
          $name=$data['Name'];
          $date=$data['Date'];
          $description=$data['Description'];
          $image=$data['Image'];
        
          if($id!=$params){
          echo " <article class='recent-post'>
          <div class='recent-post-thumbnail'>
            <a href='blog-details.php?blog=$id'><img alt='' src='admin/$image' class='wp-post-image'></a>
          </div>
          <div class='recent-post-body'>
            <h4 class='recent-post-title'>
              <a href='blog-details?blog=$id'>$name</a>
            </h4>
            <div class='recent-post-time'>$date</div>
          </div>
        </article>";}}}
          ?>


                <!-- <article class="recent-post">
                  <div class="recent-post-thumbnail">
                    <a href=""><img alt="" src="img/blog/3-149x108.jpg" class="wp-post-image"></a>
                  </div>
                  <div class="recent-post-body">
                    <h4 class="recent-post-title">
                      <a href="">Creativity can provide all that which is required make your advertising an</a>
                    </h4>
                    <div class="recent-post-time">June, 16</div>
                  </div>
                </article> -->
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