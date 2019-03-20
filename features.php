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
                <?php include ('menu.php')?>
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>

<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Features</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Features</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== BEGIN Service SECTION ================-->
<?php include('services.php') ?>
<!--=========== End Service SECTION ================-->
<!--=========== BEGAIN Why Choose Us SECTION ================-->
<?php include('whychoose.php') ?>
<!--=========== END Why Choose Us SECTION ================-->
<!--=========== BEGAIN Counter SECTION ================-->
<?php include('counter.php') ?>
<!--=========== End Counter SECTION ================-->
<section id="extraFeatures">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="departments-area">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <div class="line"></div>
                    </div>
                    <!-- Start Departments Accordion -->
                    <div class="panel-group custom-panel" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Anatomical Pathology <span class="fa fa-minus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p> It provides a full diagnostic service for routine histopathological examination as well as specialised services such as frozen sections, fine needle aspiration, post mortem and electron microscopy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Andrology <span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It performs diagnostic testing for couples presenting with infertility and provides a sperm banking service for later use in donor insemination or IVF procedures. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Blood Transfusion <span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It provides information and guidelines for transfusion practices and blood products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        Clinical Haematology <span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p> It provides clinical and diagnostic services relating to non-malignant haematological conditions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        Microbiology <span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It provides clinical and diagnostic microbiological services (Bacteriology, Virology, Microbial Serology and Molecular Microbiology).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="how-works-area">
                    <div class="section-heading">
                        <h2>How Do We Work</h2>
                        <div class="line"></div>
                    </div>
                    <div class="how-works">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#experiment" data-toggle="tab">Experiment</a></li>
                            <li><a href="#monitor" data-toggle="tab">Monitor</a></li>
                            <li><a href="#clean" data-toggle="tab">Clean</a></li>
                            <li><a href="#fast" data-toggle="tab">Fast</a></li>
                            <li><a href="#support" data-toggle="tab">Support</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="experiment">
                                <p>The accuracy of our Various Test results over the different fields has been a result of the continous experiment carried out by our doctors to help the cause of the organisation which is to provide you the best possible service.</p>
                                <img class="img-center" src="images/gallery/eservice_Diagnosis__Pathology_Pic_1.jpg" alt="img">
                            </div>
                            <div class="tab-pane fade " id="monitor">
                                <p>The test conducted by our pathologist are always monitored by senior pathologists so to avoid mininimum discrepancy in the test results and even the test results an cross-checked.</p>
                                <img class="img-center" src="images/gallery/istock_000014368289small.jpg" alt="img">
                            </div>
                            <div class="tab-pane fade " id="clean">
                                <p>Cleanliness in the workspace is the most important thing in SPA Healthcare.Each and every employee of the company maintains a level of self-hygeine so as hold the integrity of company together.All the equipments used int test are sterlized regurlarly and renwed if required.</p>
                                <img class="img-center" src="images/gallery/Pathology.jpg" alt="img">
                            </div>
                            <div class="tab-pane fade " id="fast">
                                <p>We at SPA Healthcare believe that reports delayed is reports denied so our very objective is to provide fast and reliable reports to all customers without differences</p>
                                <img class="img-center" src="images/gallery/HCNOCTN442-IMS-en_AA.png" alt="img">
                            </div>
                            <div class="tab-pane fade " id="support">
                                <p>We are here for all your needs to provide the best in class test and results</p>
                                <img class="img-center" src="images/choose-us-img1.jpg" alt="img">
                            </div>
                        </div>
                    </div>
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