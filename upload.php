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
    include('src/session_check.php');
    echo youAreHere("Upload");
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
                                                <th>Upload</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM test_appointment ");
                                            while ($row = mysqli_fetch_array($sql)) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?= $row['Test_name'] ?></th>
                                                    <td><?= $row['Test_date'] ?></td>
                                                    <td><?= $row['Test_time'] ?></td>
                                                    <td><a href="uploadcode.php?data=test&id=<?= $row['Id'] ?>">Upload</a></td>
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
                                                <th>Patient</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Upload</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM doctor_app");
                                            while ($row = mysqli_fetch_array($sql)) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?= $row['Doc_name'] ?></th>
                                                    <td><?= $row['User_name'] ?></td>
                                                    <td><?= $row['App_date'] ?></td>
                                                    <td><?= $row['App_time'] ?></td>
                                                    <td><a href="uploadcode.php?data=doctor&id=<?= $row['Id'] ?>">Upload</a></td>
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

    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
