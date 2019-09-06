<?php
include('src/functions.php');
include('src/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPA Pathcare : Appointments</title>
    <?php include('src/head.php') ?>
</head>
<body>

<?php include('src/preload.php') ?>
<!--=========== BEGIN HEADER SECTION ================-->
<?php include('src/header.php') ?>
<!--=========== END HEADER SECTION ================-->

<?php
include('src/session_check.php');
echo youAreHere("My Appointments");

$id = $_SESSION['log']['Id'];
if ($_SESSION['log1'] == "client") {
    ?>
    <section id="topFeature">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="row">
                    <div class="single-top-feature">
                        <span class="fa fa-flask"></span>
                        <h3>Test Appointment</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM test_appointment WHERE Users_id='$id' ");
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
                        $sql = mysqli_query($con, "SELECT * FROM test_appointment WHERE Users_id='$id'");
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
                    <div class="single-top-feature">
                        <span class="fa fa-hospital-o"></span>
                        <h3>Report</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM test_appointment WHERE Users_id='$id'");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <ul class="opening-table">
                                <li><a href="<?php echo $row['Report'] ?>" target="_blank">Download</a></li>
                                <li><a href="deleteapp.php?data=test&id=<?php echo $row['Id']; ?>">Delete Appointment</a></li>
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
                    <div class="single-top-feature">
                        <span class="fa fa-flask"></span>
                        <h3>Doctor Appointment</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Users_id='$id' ");
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
                        $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Users_id='$id'");
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
                    <div class="single-top-feature">
                        <span class="fa fa-hospital-o"></span>
                        <h3>Report</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Users_id='$id'");
                        while ($row = mysqli_fetch_array($sql)) {
                            $sts = $row['Status'];
                            if ($sts == "Rejected") {
                                ?>
                                <ul class="opening-table">
                                    <li><a>Rejected by Doctor</a></li>
                                    <li><a href="deleteapp.php?action=reject&id=<?php echo $row['Id']; ?>">Delete Appointment</a></li>
                                    </li>
                                </ul>
                                <?php
                            } else {
                                ?>
                                <ul class="opening-table">
                                    <li><a href="<?php echo $row['Report'] ?>" target="_blank">Download</a></li>
                                    <li><a href="deleteapp.php?action=reject&id=<?php echo $row['Id']; ?>">Delete Appointment</a></li>
                                    </li>
                                </ul>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
} else if ($_SESSION['log1'] == "doctor") {
    $name = $_SESSION['log']['Name'];
    $status = "Rejected";
    ?>
    <section id="topFeature">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="row">
                    <div class="single-top-feature">
                        <span class="fa fa-flask"></span>
                        <h3>Patient</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Doc_name='$name' and Status!='$status' ");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <ul class="opening-table">
                                <li><?php echo $row['User_name'] ?></li>
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
                        $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Doc_name='$name' and Status!='$status' ");
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
                    <div class="single-top-feature">
                        <span class="fa fa-hospital-o"></span>
                        <h3>Cancel</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Doc_name='$name' and Status!='$status' ");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <ul class="opening-table">
                                <li><a href="deleteapp.php?action=delete&id=<?php echo $row['Id']; ?>">Delete</a></li>
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
    <?php
}
?>

<!--=========== Start Footer SECTION ================-->
<?php include('src/footer.php') ?>
<!--=========== End Footer SECTION ================-->

<?php include('src/incfooter.php') ?>
</body>
</html>