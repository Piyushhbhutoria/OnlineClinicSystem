<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPA Pathcare : Upload Report</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php
    echo youAreHere("Upload Result");
    include('src/session_check.php');

    $id = $_GET['id'];
    $data = $_GET['data'];
    if (isset($_POST['btn'])) {
        $server_path = '';
        if ($data == 'doctor') {
            $server_path = "docreports";
        } else if ($data == 'test') {
            $server_path = "testreports";
        }
        #normal data type varible
        $file_name = $_POST['file_name'];
        #file type
        $file_o_name = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_type = $_FILES['img']['type'];
        if ($file_size > 1572864) {
            echo '
        <script>
        alert("File Size Exceeded!!!");
        window.location.href = "upload.php";
        </script>
        ';
        }
        /*echo "file type is ".$file_type.'<br>';
    echo "file size is ".$file_size.'<br>';
    echo "file orig name is ".$file_o_name.'<br>';*/
        if ($file_type == "application/pdf") {
            #after the file gets validated now lets upload
            #lets create a server path before uploading

            if (!file_exists($server_path)) {
                mkdir($server_path);
            }
            #after creating a folder we have to create a proper definate path
            //microtime();
            $server_path = $server_path . "/" . rand(1000, 9999) . "_" . $file_o_name;
            #now upload
            $upload = move_uploaded_file($_FILES['img']['tmp_name'], $server_path) or die($_FILES['img']['error']);
            if ($upload) {
                #save data
                $saveData = mysqli_query($con, "UPDATE doctor_app SET Report='$server_path' WHERE Id='$id' ") or die(mysqli_error($con));
                if ($saveData) {
                    echo '
                <script>
                  alert("Uploaded Sucessfully");
                  window.location.href = "upload.php";
                </script>
                ';
                }
            }
        } else {
            echo '
        <script>
        alert("File type should be pdf only");
        window.location.href = "upload.php";
        </script>
        ';
        }
    }
    ?>
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>Upload Result</h2>
                            <div class="line"></div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form class="appointment-form" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Name <span class="required">*</span></label>
                                                <input type="text" class="wp-form-control wpcf7-text" name="file_name" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Upload file: <span class="required">*</span></label>
                                                <input type="file" class="wp-form-control wpcf7-text" name="img" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <button class="wpcf7-submit button--itzel" name="btn" type="submit">
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


    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
