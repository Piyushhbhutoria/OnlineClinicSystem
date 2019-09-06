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
echo youAreHere("Update");
?>

<section id="topFeature">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-flask"></span>
                    <h3>Test Name</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM test");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <?= $row['test_name'] ?>
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
                    <span class="fa fa-clock-o"></span>
                    <h3>Update</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM test");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <a href="edit.php?data=test&id=<?= $row['id']; ?>">Edit</a>
                                &nbsp;
                                <a href="delete.php?data=test&id=<?= $row['id']; ?>">Delete</a>
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
                    <h3>Test Fees</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM test");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <?= $row['test_cost'] ?>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<h4 align="center"><a href="insert.php">Insert New</a></h4>
<section id="topFeature">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-flask"></span>
                    <h3>Doctor Name</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM doctor");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <?= $row['Name'] ?>
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
                    <span class="fa fa-clock-o"></span>
                    <h3>Update</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM doctor");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <a href="edit.php?data=doctor&id=<?= $row['id']; ?>">Edit</a>
                                &nbsp;
                                <a href="delete.php?data=doctor&id=<?= $row['id']; ?>">Delete</a>
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
                    <h3>Fees</h3>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM doctor");
                    while ($row = mysqli_fetch_array($sql)) {
                        ?>
                        <ul class="opening-table">
                            <li>
                                <?= $row['Fees'] ?>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<h4 align="center"><a href="insertdoc.php">Insert New</a></h4>

<!--=========== Start Footer SECTION ================-->
<?php include('src/footer.php') ?>
<!--=========== End Footer SECTION ================-->

<?php include('src/incfooter.php') ?>
</body>
</html>