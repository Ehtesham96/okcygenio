<!DOCTYPE html>
<?php include('dbconfig.php');
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="okcygenio.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Okcygenio</title>

<!-- Favicon -->
<link rel="shortcut icon" href="../images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="../css/plugins-css.css" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="../revolution/css/settings.css" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="../css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="../css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="../css/responsive.css" /> 
 

</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="../images/pre-loader/loader-13.svg" alt="">
</div>

<!--=================================
 preloader -->

 
<!--=================================
 header -->

<header id="header" class="header default">
  <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="topbar-call text-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> info@Okcygenio.com</li>
             <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span>+91-40-40112457 </span> </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="topbar-social text-right">
          <ul>
            <li><a href="#"><span class="ti-facebook"></span></a></li>
            <li><a href="#"><span class="ti-instagram"></span></a></li>
            <li><a href="#"><span class="ti-google"></span></a></li>
            <li><a href="#"><span class="ti-twitter"></span></a></li>
            <li><a href="#"><span class="ti-linkedin"></span></a></li>
            <li><a href="#"><span class="ti-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
  </div>
</div>

<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.html"><img id="logo_img" src="../images/logo.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
          <ul class="menu-links">
            <li><a href="../index.html">Home <i class="fa fa-indicator"></i></a>
            </li>  
            <li><a href="../aboutus.html"> About Us <i class="fa fa-indicator"></i></a>
            </li>
            <li><a href="../services.html">Services <i class="fa fa-indicator"></i></a>
            </li>
            <li><a href="../studentprogram.html"> Student Program <i class="fa fa-indicator"></i></a>
            </li>
            <li><a href="../careers.html"> Careers <i class="fa fa-indicator"></i></a>
            </li>
            <li class="active"><a href="blog/blog.php">Blog <i class="fa fa-indicator"></i></a>
            </li>
            <li><a href="../contactus.html"> Contact Us <i class="fa fa-indicator"></i></a> 
            </li>
        </ul>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->


<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(../images/blog/banner/01.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1></h1>
         
        </div>
          
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
 Blog-->

<section class="blog white-bg page-section-ptb">
<?php $result=mysqli_query($link,"Select * FROM blog WHERE status = 1 ORDER BY id DESC");  
						   while($row=mysqli_fetch_assoc($result)) { 
						   ?>  
<div class="container">
    <div class="row">
    
     <div class="col-lg-12 col-md-12">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
              <img class="img-responsive" src="../images/blog/<?php echo $row['img'];?>" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#"><?php echo $row['title'] ; ?></a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      
                      <li><a href="#"><i class="fa fa-calendar-o"></i><?php echo $row['date'] ; ?></a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p><?php echo $row['content']; ?></p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="blogview.php?id=<?php echo $row['id'];?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
     </div> 
    </div>
  </section>
                           <?php } ?>
<!--=================================
 footer -->
 
 <footer class="footer footer-topbar black-bg">
    <div class="copyright">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-sm-6">
    <img class="img-responsive mb-10" id="logo-footer" src="../images/logo.png" alt="">
          <div class="footer-text">
             <p> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Okcygenio </a> All Rights Reserved </p>
          </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="footer-social">
          <ul class="list-inline text-right">
             <li><a href="#">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
             <li><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
             <li><a href="#">Privacy Policy </a> </li>
          </ul></div>
        <div class="social-icons color-hover pull-right mt-20">
             <ul class="clearfix"> 
              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
              <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
             </ul>
           </div>
      </div>
    </div>
    </div>
    </div>
    </footer>
    
<!--=================================
  footer -->
   
 
 

 </div>

 

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script type="text/javascript" src="../js/jquery-1.12.4.min.js"></script>

<!-- plugins-jquery -->
<script type="text/javascript" src="../js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script type="text/javascript">var plugin_path = 'js/';</script>
 

<!-- custom -->
<script type="text/javascript" src="../js/custom.js"></script>
 
</body>
</html> 