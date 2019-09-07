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
    echo youAreHere("Appointments");

    $id = $_SESSION['log']['Id'];
    if ($_SESSION['log1'] == "client") {
        ?>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-area">
                            <!-- Start Service Title -->
                            <div class="section-heading">
                                <h2>Test Appointment</h2>
                                <div class="line"></div>
                            </div>
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Test</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Download</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM test_appointment WHERE Users_id='$id' ");
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        ?>
                                                    <tr>
                                                        <th scope="row"><?= $row['Test_name'] ?></th>
                                                        <td><?= $row['Test_date'] ?></td>
                                                        <td><?= $row['Test_time'] ?></td>
                                                        <td><a href="<?= $row['Report'] ?>" target="_blank">Download</a></td>
                                                        <td><a href="deleteapp.php?data=test&action=delete&id=<?= $row['Id']; ?>">Delete Appointment</a></td>
                                                    </tr>
                                                <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
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
                                <h2>Doctor Appointment</h2>
                                <div class="line"></div>
                            </div>
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Doctor</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Download</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Users_id='$id' ");
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        $sts = $row['Status'];
                                                        ?>
                                                    <tr>
                                                        <th scope="row"><?= $row['Doc_name'] ?></th>
                                                        <td><?= $row['App_date'] ?></td>
                                                        <td><?= $row['App_time'] ?></td>
                                                        <?php
                                                                if ($sts == "Rejected") {
                                                                    ?>
                                                            <td>Rejected by Doctor</td>
                                                            <td>
                                                                <a href="deleteapp.php?data=doctor&action=delete&id=<?= $row['Id']; ?>">Delete Appointment</a>
                                                            </td>
                                                        <?php
                                                                } else {
                                                                    ?>
                                                            <td><a href="<?= $row['Report'] ?>" target="_blank">Download</a></td>
                                                            <td>
                                                                <a href="deleteapp.php?data=doctor&action=delete&id=<?= $row['Id']; ?>">Delete Appointment</a>
                                                            </td>
                                                        <?php
                                                                }
                                                                ?>
                                                    </tr>
                                                <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-area">
                            <!-- Start Service Title -->
                            <div class="section-heading">
                                <h2>Appointments</h2>
                                <div class="line"></div>
                            </div>
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Patient</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE Doc_name='$name' and Status!='$status' ");
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        $sts = $row['Status'];
                                                        ?>
                                                    <tr>
                                                        <th scope="row"><?= $row['User_name'] ?></th>
                                                        <td><?= $row['App_date'] ?></td>
                                                        <td><?= $row['App_time'] ?></td>
                                                        <td><a href="deleteapp.php?data=doctor&action=reject&id=<?= $row['Id']; ?>">Delete</a></td>
                                                    </tr>
                                                <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
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
