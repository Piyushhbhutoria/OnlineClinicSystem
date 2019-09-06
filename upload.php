<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPA Pathcare : Upload</title>
    <?php include('src/head.php') ?>
</head>
<body>

<?php include('src/preload.php') ?>
<!--=========== BEGIN HEADER SECTION ================-->
<?php include('src/header.php') ?>
<!--=========== END HEADER SECTION ================-->

<?php
include ('src/session_check.php');
echo youAreHere("Upload");
?>

<section id="topFeature">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-flask"></span>
                    <h3>Test Appointment</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM test_appointment ");
                    while ($row = mysqli_fetch_array($sql)) {
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
                    $sql = mysqli_query($con, "SELECT * FROM test_appointment ");
                    while ($row = mysqli_fetch_array($sql)) {
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
                    $sql = mysqli_query($con, "SELECT * FROM test_appointment ");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <a href="uploadcode1.php?id=<?php echo $row['Id'] ?>">Upload</a>
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
                    $status = "Rejected";
                    $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Status!='$status' ");
                    while ($row = mysqli_fetch_array($sql)) {
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
                    $status = "Rejected";
                    $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Status!='$status' ");
                    while ($row = mysqli_fetch_array($sql)) {
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
                    $status = "Rejected";
                    $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Status!='$status' ");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <a href="uploadcode.php?id=<?php echo $row['Id'] ?>">Upload</a>
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
<?php include('src/footer.php') ?>
<!--=========== End Footer SECTION ================-->

<?php include('src/incfooter.php') ?>
</body>
</html>