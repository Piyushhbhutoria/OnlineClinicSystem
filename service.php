<?php
include('src/functions.php');
include('src/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPA Pathcare : Service</title>
    <?php include('src/head.php') ?>
</head>
<body>
<?php include('src/preload.php') ?>
<!--=========== BEGIN HEADER SECTION ================-->
<?php include('src/header.php') ?>
<!--=========== END HEADER SECTION ================-->

<?php echo youAreHere("Service") ?>

<section id="topFeature" style="margin-left: 21%">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-flask"></span>
                    <h3>Tests avialable</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM test");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li><?= $row['test_name'] ?></li>
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
                    <h3>Test Fees</h3>
                    <?php
                    $sql1 = mysqli_query($con, "SELECT * FROM test");
                    while ($row1 = mysqli_fetch_array($sql1)) {
                        ?>
                        <ul class="opening-table">
                            <li><?= $row1['test_cost'] ?></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<h4 align="center"><a href="index.php">Book Appointment</a></h4>

<!--=========== Start Footer SECTION ================-->
<?php include('src/footer.php') ?>
<!--=========== End Footer SECTION ================-->

<?php include('src/incfooter.php') ?>
</body>
</html>
