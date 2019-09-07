<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPA Pathcare : Edit Profile</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php
    include('src/session_check.php');
    if (isset($_POST['ok'])) {
        $id = $_SESSION['log']['Id'];
        $email = $_POST['mail'];
        $phno = $_POST['phno'];
        if ($_SESSION['log1'] == "client") {
            $name = $_POST['nam'];
            $addr = $_POST['addr'];
            $res = mysqli_query($con, "UPDATE client SET Name = '$name',Email = '$email',Address = '$addr',Phone = '$phno' WHERE Id = '$id' ");
            $qry1 = mysqli_query($con, "SELECT * FROM client WHERE Email='$email'");
            $qry2 = mysqli_num_rows($qry1);
            $row = mysqli_fetch_array($qry1);
            $_SESSION['log'] = $row;
        } else if ($_SESSION['log1'] == "admin") {
            $res = mysqli_query($con, "UPDATE admin SET Email = '$email',Phone = '$phno' WHERE Id = '$id' ");
            $qry3 = mysqli_query($con, "SELECT * FROM admin WHERE Email='$email'");
            $qry4 = mysqli_num_rows($qry3);
            $row = mysqli_fetch_array($qry3);
            $_SESSION['log'] = $row;
        } else if ($_SESSION['log1'] == "doctor") {
            $addr = $_POST['addr'];
            $res = mysqli_query($con, "UPDATE doctor SET Address = '$addr',Email = '$email',Phone = '$phno' WHERE Id = '$id' ");
            $qry5 = mysqli_query($con, "SELECT * FROM doctor WHERE Email='$email'");
            $qry6 = mysqli_num_rows($qry5);
            $row = mysqli_fetch_array($qry5);
            $_SESSION['log'] = $row;
        }
        if ($res == 1) {
            echo '
        <script>
          alert("Details Updated");
        </script>
        ';
        } else {
            echo '
        <script>
          alert("Details not Updated");
        </script>
        ';
        }
    }
    if (isset($_POST['okpass'])) {
        $pwd = $_POST['pwd'];
        $repwd = $_POST['repwd'];
        if ($pwd == $repwd) {
            if ($_SESSION['log1'] == "client") {
                $res = mysqli_query($con, "UPDATE client SET Password='$pwd' WHERE Id='$id' ");
            } else if ($_SESSION['log1'] == "admin") {
                $res = mysqli_query($con, "UPDATE admin SET Password='$pwd' WHERE Id='$id' ");
            } else if ($_SESSION['log1'] == "doctor") {
                $res = mysqli_query($con, "UPDATE doctor SET Password='$pwd' WHERE Id='$id' ");
            }
            if ($res == 1) {
                echo '
            <script>
              alert("Password Updated Successfully!");
            </script>
            ';
            } else {
                echo '
            <script>
              alert("Password not Updated");
            </script>
            ';
            }
        } else {
            echo '
        <script>
          alert("Passwords Doesn\'t match.");
        </script>
        ';
        }
    }
    echo youAreHere("Edit Profile");
    ?>

    <!--=========== BEGAIN Doctors SECTION ================-->
    <?php if ($_SESSION['log1'] == "client" || $_SESSION['log1'] == "doctor") { ?>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-area">
                            <!-- Start Service Title -->
                            <div class="section-heading">
                                <h2>Update Profile Picture</h2>
                                <div class="line"></div>
                            </div>
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form class="appointment-form" method="post" enctype="multipart/form-data" action="uploaddp.php">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="single-testimonial1">
                                                        <div class="testimonial-img">
                                                            <?php if ($_SESSION['log']['Dp'] != NULL) { ?>
                                                                <img src="<?= $_SESSION['log']['Dp'] ?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <input type="file" class="wp-form-control wpcf7-text" name="img">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <button class="wpcf7-submit button--itzel" name="dpok" type="submit">
                                                        <i class="button__icon fa fa-share"></i><span>Upload</span>
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
    <?php
    }
    ?>
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>Update Profile</h2>
                            <div class="line"></div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form class="appointment-form" method="post">
                                        <?php if ($_SESSION['log1'] == "client") { ?>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Name <span class="required">*</span></label>
                                                    <input type="text" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Name'] ?>" name="name" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Email <span class="required">*</span>
                                                    </label>
                                                    <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Email'] ?>" name="mail" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Address <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Address'] ?>" name="addr" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Phone <span class="required">*</span>
                                                    </label>
                                                    <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Phone'] ?>" name="phno" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                        <?php } else if ($_SESSION['log1'] == "admin") { ?>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Email <span class="required">*</span></label>
                                                    <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Email'] ?>" name="mail" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Phone <span class="required">*</span></label>
                                                    <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Phone'] ?>" name="phno" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                        <?php } else if ($_SESSION['log1'] == "doctor") { ?>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Email <span class="required">*</span></label>
                                                    <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Email'] ?>" name="mail" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Address <span class="required">*</span></label>
                                                    <input type="text" class="wp-form-control wpcf7-email" value="<?php echo $_SESSION['log']['Address'] ?>" name="addr" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Phone <span class="required">*</span>
                                                    </label>
                                                    <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $_SESSION['log']['Phone'] ?>" name="phno" required>
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                        <?php } ?>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <button class="wpcf7-submit button--itzel" name="ok" type="submit">
                                                    <i class="button__icon fa fa-share"></i><span>Update</span>
                                                </button>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
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

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>Change Password</h2>
                            <div class="line"></div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form class="appointment-form" method="post">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Password <span class="required">*</span></label>
                                                <input type="password" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Retype Password <span class="required">*</span></label>
                                                <input type="password" class="wp-form-control wpcf7-text" placeholder="Retype Password" name="repwd" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <button class="wpcf7-submit button--itzel" name="okpass" type="submit">
                                                    <i class="button__icon fa fa-share"></i><span>Update Password</span>
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
