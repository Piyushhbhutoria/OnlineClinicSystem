<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPA Pathcare : Insert</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php
    echo youAreHere("Insert");
    include('src/session_check.php');

    $data = $_GET['data'];
    if (isset($_POST['ok'])) {
        $res;
        if ($data == 'test') {
            $testname = $_POST['testname'];
            $testfee = $_POST['testfee'];
            $res = mysqli_query($con, "INSERT INTO test (test_name,test_cost) VALUES ('$testname','$testfee')");
        } else if ($data == "doctor") {
            $name = $_POST['fname'] . " " . $_POST['lname'];
            $email = $_POST['mail'];
            $dob = $_POST['dob'];
            $gnd = $_POST['gnd'];
            $addr = $_POST['addr'];
            $phno = $_POST['phno'];
            $pwd = $_POST['pwd'];
            $fee = $_POST['fee'];
            $cat = $_POST['category'];
            $res = mysqli_query($con, "INSERT INTO doctor (Name, Email, Dob, Gender, Address, Phone, Password, Fees, Category) VALUES ('$name','$email','$dob','$gnd','$addr','$phno','$pwd','$fee','$cat')");
        }
        if ($res == 1) {
            echo '
                <script>
                alert("Insertion Sucesssful");
                window.location.href = "update.php";
                </script>
                ';
        } else {
            echo '
                <script>
                alert("Insertion Unucesssful");
                </script>
                ';
        }
    }
    if ($data == 'test') {
    ?>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-area">
                            <!-- Start Service Title -->
                            <div class="section-heading">
                                <h2>Add Test</h2>
                                <div class="line"></div>
                            </div>
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form class="appointment-form" method="post">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Name <span class="required">*</span></label>
                                                    <input type="text" class="wp-form-control wpcf7-text" name="testname" required value="<?= $_POST['testname'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Fees <span class="required">*</span></label>
                                                    <input type="number" class="wp-form-control wpcf7-text" name="testfee" required value="<?= $_POST['testfee'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <button class="wpcf7-submit button--itzel" name="ok" type="submit">
                                                        <i class="button__icon fa fa-share"></i><span>Add</span>
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
    } else if ($data == 'doctor') {
    ?>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-area">
                            <!-- Start Service Title -->
                            <div class="section-heading">
                                <h2>Add Doctor</h2>
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
                                                    <input type="text" class="wp-form-control wpcf7-text" placeholder="First name" name="fname" required pattern="[A-Za-z-0-9]+" value="<?= $_POST['fname'] ?>">
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <label class="control-label">Last name <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="wp-form-control wpcf7-text" placeholder="Last name" name="lname" required pattern="[A-Za-z-0-9]+" value="<?= $_POST['lname'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Email <span class="required">*</span></label>
                                                    <input type="email" class="wp-form-control wpcf7-text" placeholder="Email address" name="mail" required value="<?= $_POST['mail'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Date of Birth <span class="required">*</span></label>
                                                    <input type="date" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy" max="<?= date("Y-m-d") ?>" name="dob" required value="<?= $_POST['dob'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Gender <span class="required">*</span></label>
                                                    <select class="wp-form-control wpcf7-text" name="gnd" required>
                                                        <option value="<?= $_POST['gnd'] ?>"><?= $_POST['gnd'] ?></option>
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
                                                    <input type="text" class="wp-form-control wpcf7-text" placeholder="Address" name="addr" required value="<?= $_POST['addr'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Phone <span class="required">*</span></label>
                                                    <input type="number" class="wp-form-control wpcf7-text" placeholder="Phone No" name="phno" required value="<?= $_POST['phno'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Password <span class="required">*</span></label>
                                                    <input type="password" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd" required value="<?= $_POST['pwd'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Fees <span class="required">*</span></label>
                                                    <input type="text" class="wp-form-control wpcf7-text" placeholder="Fees" name="fee" required value="<?= $_POST['fee'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <label class="control-label">Category <span class="required">*</span></label>
                                                    <input type="text" class="wp-form-control wpcf7-text" placeholder="Category" name="category" required value="<?= $_POST['category'] ?>">
                                                </div>
                                                <div class="col-lg-2 col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2"></div>
                                                <div class="col-lg-8 col-md-8 col-sm-6">
                                                    <button class="wpcf7-submit button--itzel" name="ok" type="submit">
                                                        <i class="button__icon fa fa-share"></i><span>Add</span>
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

    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
