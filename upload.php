<?php 
include('config.php');
include('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>SPA Pathcare : Home</title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>
    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/orange-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel="stylesheet prefetch" href="css/photoswipe.css">
    <link rel="stylesheet prefetch" href="css/default-skin.css">    
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">  
    <link href="http://fonts.googleapis.com/css?family=Habibi" rel="stylesheet" type="text/css">   
    <link href="http://fonts.googleapis.com/css?family=Cinzel+Decorative:900" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>  
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->
    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>SPA <span>Pathcare</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <!--/.nav-collapse -->           
            <?php include ('menu.php') ?>
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->      
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Upload</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="#">Home</a></li>                  
                  <li class="active">Upload</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>
  
   <section id="topFeature">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-flask"></span>
              <h3>Test Appointment</h3>
              <?php 
              $sql=mysqli_query($con,"SELECT * FROM test_appointment ");
              while($row=mysqli_fetch_array($sql)) {
              ?>
              <ul class="opening-table">
                <li><?php echo $row['Test_name'] ?></li>
                <li>&nbsp;</li>
              </ul>  
              <?php
              }
            ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Appointment Details</h3>
              <?php 
              $sql=mysqli_query($con,"SELECT * FROM test_appointment ");
              while($row=mysqli_fetch_array($sql))
                {
              ?>
              <ul class="opening-table">
                <li>
                  <span>Date</span>
                  <div><?php echo $row['Test_date'] ?></div>
				        </li>
                <li>
                  <span>Time</span>
				          <div><?php echo $row['Test_time'] ?></div>
                </li>
              </ul>   
              <?php
              }
            ?>           
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-hospital-o"></span>
              <h3>Report</h3>
              <?php 
              $sql=mysqli_query($con,"SELECT * FROM test_appointment ");
              while($row=mysqli_fetch_array($sql))
                {
              ?>
              <ul class="opening-table">
                <li>
                  <a href="uploadcode1.php?id=<?php echo $row['Id']?>">Upload</a>
                </li>
                <li>&nbsp;</li>
              </ul>   
               <?php
              }
            ?>             
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="topFeature">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-flask"></span>
              <h3>Doctor Appointment</h3>
                <?php 
                $status="Rejected";
                $sql=mysqli_query($con,"SELECT * FROM doctor_app WHERE Status!='$status' ");
                while($row=mysqli_fetch_array($sql)) {
                ?>
                <ul class="opening-table">
                  <li>
                    <?php echo $row['Doc_name'] ?>
                  </li>
                  <li>&nbsp;</li>
                </ul>  
                <?php
                }
              ?>
              </div>
            </div>
          </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Appointment Details</h3>
              <?php 
              $status="Rejected";
              $sql=mysqli_query($con,"SELECT * FROM doctor_app WHERE Status!='$status' ");
              while($row=mysqli_fetch_array($sql))
                {
              ?>
              <ul class="opening-table">
                <li>
                  <span>Date</span>
                  <div><?php echo $row['App_date'] ?></div>
                </li>
                <li>
                  <span>Time</span>
                  <div><?php echo $row['App_time'] ?></div>
                </li>
              </ul>   
              <?php
              }
            ?>           
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-hospital-o"></span>
              <h3>Report</h3>
              <?php 
              $status="Rejected";
              $sql=mysqli_query($con,"SELECT * FROM doctor_app WHERE Status!='$status' ");
              while($row=mysqli_fetch_array($sql))
                {
              ?>
              <ul class="opening-table">
                <li>
                  <a href="uploadcode.php?id=<?php echo $row['Id']?>">Upload</a>
                </li>
                <li>&nbsp;</li>
              </ul>   
              <?php
              }
            ?>             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== Start Footer SECTION ================-->
    <?php include('footer.php') ?>
    <!--=========== End Footer SECTION ================-->
    <!-- jQuery Library  -->
    <script src="js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>    
    <!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
  </body>
</html>