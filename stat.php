<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPA Pathcare : Update</title>
    <?php include('src/head.php') ?>
</head>
<body>

<?php include('src/preload.php') ?>
<!--=========== BEGIN HEADER SECTION ================-->
<?php include('src/header.php') ?>
<!--=========== END HEADER SECTION ================-->

<?php
include ('src/session_check.php');
echo youAreHere("Statistics");
?>

<section id="topFeature">
    <div class="row" style="margin-left: 25%;">
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-flask"></span>
                    <h3>Test Name</h3>
                    <ul class="opening-table">
                        <li>&nbsp;</li>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM test");
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <li><?php echo $row['test_name']; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-hospital-o"></span>
                    <h3>No. of Appointments</h3>
                    <ul class="opening-table">
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM test");
                        while ($row = mysqli_fetch_array($sql)) {
                            $c = 0;
                            $test = $row['test_name'];
                            $sql1 = mysqli_query($con, "SELECT * FROM test_appointment");
                            while ($row1 = mysqli_fetch_array($sql1)) {
                                $test1 = $row1['Test_name'];
                                if ($test == $test1)
                                    $c = $c + 1;
                            }
                            ?>
                            <li><?php echo $c; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
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