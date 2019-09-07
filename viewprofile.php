<?php include('src/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPA Pathcare : View profile</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php
    include('src/session_check.php');
    echo youAreHere("View Profile");
    ?>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>My Profile</h2>
                            <div class="line"></div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form class="appointment-form" action="editprofile.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="single-testimonial1">
                                                    <div class="testimonial-img">
                                                        <?php if ($_SESSION['log']['Dp'] != NULL) { ?>
                                                            <img src="<?= $_SESSION['log']['Dp'] ?>">
                                                        <?php } ?>
                                                    </div>
                                                    <div class="testimonial-cotent">
                                                        <p class="testimonial-parg">To Upload your Profile Picture go to
                                                            Update
                                                            Profile</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Name <span class="required">*</span></label>
                                                <input type="text" class="wp-form-control wpcf7-text" value="<?= $_SESSION['log']['Name'] ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Email <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-email" value="<?= $_SESSION['log']['Email'] ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Date Of Birth <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-email" value="<?= $_SESSION['log']['Dob'] ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Select Gender <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-email" value="<?= $_SESSION['log']['Gender'] ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Address <span class="required">*</span></label>
                                                <input type="text" class="wp-form-control wpcf7-email" value="<?= $_SESSION['log']['Address'] ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Phone <span class="required">*</span></label>
                                                <input type="number" class="wp-form-control wpcf7-text" value="<?= $_SESSION['log']['Phone'] ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <button class="wpcf7-submit button--itzel" type="submit">
                                                    <i class="button__icon fa fa-share"></i><span>Update Profile</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== BEGAIN Counter SECTION ================-->
    <?php include('src/counter.php') ?>
    <!--=========== End Counter SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
