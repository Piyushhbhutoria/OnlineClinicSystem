<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpA Pathcare : Edit Profile</title>
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
<?php include('session_check.php'); ?>
<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Edit Profile</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== BEGAIN Doctors SECTION ================-->
<?php if($_SESSION['log1']=="client" or $_SESSION['log1']=="doctor") { ?>
    <section id="meetDoctors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="meetDoctors-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>Upload Profile Picture</h2>
                            <div class="line"></div>
                        </div>
                        <div class="modal-body" style="margin-left:25%">
                            <div class="appointment-area">
                                <form class="appointment-form" method="post" enctype="multipart/form-data" action="uploaddp.php">
                                    <div class="row">
                                        <div class="single-testimonial1" style="width: 550px">
                                            <div class="testimonial-img">
                                                <?php if($_SESSION['log']['Dp'] != NULL) { ?>
                                                <img src="<?php echo $_SESSION['log']['Dp'] ?>" alt="img">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <input type="file" class="wp-form-control wpcf7-text" name="img">
                                        </div>
                                    </div>
                                    <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Upload</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
<section id="meetDoctors">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="meetDoctors-area">
                    <!-- Start Service Title -->
                    <div class="section-heading">
                        <h2>Update Profile</h2>
                        <div class="line"></div>
                    </div>
                    <?php if($_SESSION['log1']=="client") { ?>
                        <div class="modal-body" style="margin-left:25%">
                            <div class="appointment-area">
                                <form class="appointment-form" action="edit_code.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your name <span class="required">*</span>
                                            </label>
                                            <input type="text" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Name'] ?>" name="nam" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Email <span class="required">*</span>
                                            </label>
                                            <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Email'] ?>" name="mail" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Address <span class="required">*</span>
                                            </label>
                                            <input type="text" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Address'] ?>" name="addr" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Phone <span class="required">*</span>
                                            </label>
                                            <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Phoneno'] ?>" name="phno" required>
                                        </div>
                                    </div>
                                    <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Update</span></button>
                                </form>
                            </div>
                        </div>
                    <?php } else if($_SESSION['log1']=="admin") { ?>
                        <div class="modal-body" style="margin-left:25%">
                            <div class="appointment-area">
                                <form class="appointment-form" action="edit_code.php" enctype="multipart/form-data" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Email <span class="required">*</span></label>
                                            <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Email'] ?>" name="mail" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Phone <span class="required">*</span></label>
                                            <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Phoneno'] ?>" name="phno" required>
                                        </div>
                                    </div>
                                    <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Update</span></button>
                                </form>
                            </div>
                        </div>
                    <?php } else if($_SESSION['log1']=="doctor") { ?>
                        <div class="modal-body" style="margin-left:25%">
                            <div class="appointment-area">
                                <form class="appointment-form" action="edit_code.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Email <span class="required">*</span></label>
                                            <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Email'] ?>" name="mail" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Address <span class="required">*</span></label>
                                            <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Address'] ?>" name="addr" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Your Phone <span class="required">*</span>
                                            </label>
                                            <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Phoneno'] ?>" name="phno" required>
                                        </div>
                                    </div>
                                    <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Update</span></button>
                                </form>
                            </div>
                        </div>
                    <?php }	?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="meetDoctors">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="meetDoctors-area">
                    <!-- Start Service Title -->
                    <div class="section-heading">
                        <h2>Change Password</h2>
                        <div class="line"></div>
                    </div>
                    <div class="modal-body" style="margin-left:25%">
                        <div class="appointment-area">
                            <form class="appointment-form" action="editpas.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label">Your Password <span class="required">*</span>
                                        </label>
                                        <input type="password" class="wp-form-control wpcf7-text" placeholder="Your Password" name="pwd" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label">Retype Password <span class="required">*</span>
                                        </label>
                                        <input type="password" class="wp-form-control wpcf7-text" placeholder="Retype Password" name="repwd" required>
                                    </div>
                                </div>
                                <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Change Password</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== End Doctors SECTION ================-->
<!--=========== BEGAIN Counter SECTION ================-->
<?php include('counter.php') ?>
<!--=========== End Counter SECTION ================-->
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