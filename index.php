<?php 
include("config.php");
session_start(); 
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
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
            <?php include("menu.php"); ?>
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/14.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>The<strong>One Stop</strong> for all your Health Needs</h2>
            <p><strong >SPA PathCare </strong>Providing the Best in Class Services</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/Chemistry.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>World Class</strong> Test Labs</h2>
            <p><strong>SPA Pathcare</strong> Providing the Best in Class Accurate Test Results</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/7.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Highly</strong> qualified doctors</h2>
            <p><strong>SPA Pathcare</strong> Providing the best in class and highly qualified doctors in town</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div>
        <!-- End Third slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN Top Feature SECTION ================-->
    <?php 
    if(isset($_SESSION['log'])=="" or $_SESSION['log1']=="client")
    {
      ?>
        <section id="topFeature">
          <div class="row">
            <!-- Start Single Top Feature -->
            <div class="col-lg-4 col-md-4">
              <div class="row">
                <div class="single-top-feature">
                  <span class="fa fa-flask"></span>
                  <h3>Emergency Care</h3>
                  <p>In cases of Emergency this is the right place you are looking providing fast test reports and catering to our patients need.</p>
                  <div class="readmore_area">
                    <a href="#" data-hover="Read More"><span>Read More</span></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Top Feature -->
            <!-- Start Single Top Feature -->
            <div class="col-lg-4 col-md-4">
              <div class="row">
                <div class="single-top-feature opening-hours">
                  <span class="fa fa-clock-o"></span>
                  <h3>Opening Hours</h3>
                  <p>Open All seven days of the week.</p>
                  <ul class="opening-table">
                    <li>
                      <span>Monday - Friday</span>
                      <div class="value">8.00 - 16.00</div>
                    </li>
                    <li>
                      <span>Saturday</span>
                      <div class="value">9.30 - 15.30</div>
                    </li>
                    <li>
                      <span>Sunday</span>
                      <div class="value">9.30 - 17.00</div>
                    </li>
                  </ul>              
                </div>
              </div>
            </div>
            <!-- End Single Top Feature -->
            <!-- Start Single Top Feature -->
            <div class="col-lg-4 col-md-4">
              <div class="row">
                <div class="single-top-feature">
                  <span class="fa fa-hospital-o"></span>
                  <h3>Appointment</h3>
                  <p>Now booking an appointment is just a click away so just click on the button below and start booking appointments straight away.</p>
                  <div class="readmore_area">
                    <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appoinment"><span>Appoinment</span></a>    
                  </div>
                  <!-- start modal window -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Test Appoinment Details</h4>
                        </div>
                        <div class="modal-body">
                          <div class="appointment-area">
                            <form class="appointment-form" action="appoint.php" method="post">                          
                              <div class="row">
                                <div class="col-md-6 col-sm-6">
                                  <label class="control-label">Appointment Date <span class="required">*</span>
                                  </label>
                                  <input type="date" class="wp-form-control wpcf7-text" placeholder="mm/dd/yy" name="appdate1" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m+1-d"); ?>" required >
                                </div>
                                <div class="col-md-6 col-sm-6">
                                  <label class="control-label">Appointment Time <span class="required">*</span>
                                  </label>
                                  <input type="Time" class="wp-form-control wpcf7-text" placeholder="hh:mm" name="apptime1" required >
                                </div>
                                <div class="col-md-6 col-sm-6">
                                  <label class="control-label">Select Test <span class="required">*</span>
                                  </label>
                                  <?php $sql=mysqli_query($con,"SELECT * FROM test"); ?>
                                  <select class="wp-form-control wpcf7-select" name="test" required>
                                  <?php
                                  while($row=mysqli_fetch_array($sql))
                                  {
                                  ?>
                                    <option val="<?php echo $row['test_name']; ?>"><?php echo $row['test_name'];  ?></option>
                                  <?php
                                  }
                                  ?>
                                  </select> 
                                </div>
                              </div>                              
                            <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>  
                            </form>
                          </div>
                        </div> 
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Doctor Appoinment Details</h4>
                        </div>
                        <div class="modal-body">
                          <div class="appointment-area">
                            <form class="appointment-form" action="appointdoc.php" method="post">                        
                              <div class="row">
                                <div class="col-md-6 col-sm-6">
                                  <label class="control-label">Appointment Date <span class="required">*</span>
                                  </label>
                                  <input type="date" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy" name="appdate" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m+1-d"); ?>" required>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                  <label class="control-label">Appointment Time <span class="required">*</span>
                                  </label>
                                  <input type="Time" class="wp-form-control wpcf7-text" placeholder="hh:mm" name="apptime" required >
                                </div>
                                <div class="col-md-6 col-sm-6">
                                  <label class="control-label">Select Doctor <span class="required">*</span>
                                  </label>
                                  <?php	$sql1=mysqli_query($con,"SELECT * FROM doctor"); ?>
                                  <select class="wp-form-control wpcf7-select" name="docname" required>
                                  <?php
                                  while($row1=mysqli_fetch_array($sql1))
                                  {
                                  ?>
                                    <option val="<?php echo $row1['Name'] ?>"><?php echo $row1['Name'] ?></option>
                                    <?php
                                  }
                                  ?>
                                  </select> 
                                </div>
                              </div>                              
                            <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>  
                            </form>
                          </div>
                        </div>                   
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                </div>
              </div>
            </div>
            <!-- End Single Top Feature -->
          </div>
        </section>
        <!--=========== END Top Feature SECTION ================-->
        <?php
    }
    ?>
    <!--=========== BEGIN Service SECTION ================-->
    <?php include('services.php') ?>
    <!--=========== End Service SECTION ================-->
    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <?php include('whychoose.php') ?>
    <!--=========== END Why Choose Us SECTION ================-->
    <!--=========== BEGAIN Counter SECTION ================-->
    <?php include('counter.php') ?>
    <!--=========== End Counter SECTION ================-->
    <!--=========== BEGAIN Doctors SECTION ================-->
    <?php include('meet_our_doc.php') ?>
    <!--=========== End Doctors SECTION ================-->
    <!--=========== BEGAIN Testimonial SECTION ================-->
    <?php include('testimony.php') ?>
    <!--=========== End Testimonial SECTION ================-->
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
    <!-- Photo Swipe Gallery Slider -->
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>    
    <script src="js/photoswipe-gallery.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
  </body>
</html>