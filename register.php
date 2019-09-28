<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPA Pathcare : Register</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php
    $fname = $lname = $email = $dob = $gnd = $addr = $phno = $pwd = $repwd = '';
    if (isset($_POST['ok'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $name = $fname . " " . $lname;
        $email = $_POST['mail'];
        $dob = $_POST['dob'];
        $gnd = $_POST['gnd'];
        $addr = $_POST['addr'];
        $phno = $_POST['phno'];
        $pwd = $_POST['pwd'];
        $repwd = $_POST['repwd'];
        if ($pwd == $repwd) {
            $qry1 = mysqli_query($con, "SELECT * FROM client WHERE Email = '$email'") or die(mysqli_error($con));
            $qry2 = mysqli_num_rows($qry1);
            if ($qry2 == 0) {
                $qry3 = mysqli_query($con, "INSERT INTO client (Name, Email, Dob, Gender, Address, Phone, Password) VALUES ('$name', '$email', '$dob', '$gnd', '$addr', '$phno','$pwd')") or die(mysqli_error($con));
                echo '
                <script>
                alert("Registered Successfullly");
                window.location.href = "signin.php";
                </script>';
            } else {
                echo '
                <script>
                alert("Email already Registered");
                </script>';
            }
        } else {
            echo '
            <script>
              alert("Password doesn\'t match");
            </script>';
        }
    }
    echo youAreHere("Register");
    ?>

    <!--=========== BEGIN REGISTRATION SECTION ================-->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>Register</h2>
                            <div class="line"></div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form class="appointment-form" method="post">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <label class="control-label">First name <span class="required">*</span>
                                                </label>
                                                <input type="text" class="wp-form-control wpcf7-text" placeholder="First name" name="fname" value="<? echo $fname ?>" required pattern="[A-Za-z-0-9]+">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <label class="control-label">Last name <span class="required">*</span>
                                                </label>
                                                <input type="text" class="wp-form-control wpcf7-text" placeholder="Last name" name="lname" value="<?= $lname ?>" required pattern="[A-Za-z-0-9]+">
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Email <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-text" placeholder="Email address" name="mail" value="<?= $email ?>" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Date of Birth <span class="required">*</span></label>
                                                <input type="date" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy" max="<?= date("Y-m-d") ?>" name="dob" value="<?= $dob ?>" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Gender <span class="required">*</span></label>
                                                <select class="wp-form-control wpcf7-text" name="gnd" required>
                                                    <option value="<?= $gnd ?>"><?= $gnd ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Address <span class="required">*</span></label>
                                                <input type="text" class="wp-form-control wpcf7-text" placeholder="Address" name="addr" value="<?= $addr ?>" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Phone <span class="required">*</span></label>
                                                <input type="number" class="wp-form-control wpcf7-text" placeholder="Phone No" name="phno" value="<?= $phno ?>" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Password <span class="required">*</span></label>
                                                <input type="password" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd" value="<?= $pwd ?>" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Retype Password <span class="required">*</span></label>
                                                <input type="password" class="wp-form-control wpcf7-text" placeholder="Retype Password" name="repwd" value="<?= $repwd ?>" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <button class="wpcf7-submit button--itzel" name="ok" type="submit">
                                                    <i class="button__icon fa fa-share"></i><span>Register</span>
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
    <!--=========== END REGISTRATION SECTION ================-->

    <!--=========== BEGIN Counter SECTION ================-->
    <?php include('src/counter.php') ?>
    <!--=========== End Counter SECTION ================-->

    <!--=========== BEGIN Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
