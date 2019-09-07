<?php
include('src/config.php');
session_start();
#normal data type varible
#file type
$file_o_name = $_FILES['img']['name'];
$file_size = $_FILES['img']['size'];
$file_type = $_FILES['img']['type'];
if ($file_size > 1572864) {
    die('
    <script>
      alert("File Size Exceeded");
      window.location.href = "editprofile.php";
    </script>
    ');
}
/*echo "file type is ".$file_type.'<br>';
echo "file size is ".$file_size.'<br>';
echo "file orig name is ".$file_o_name.'<br>';*/
if ($file_type == "image/jpeg") {
    #after the file gets validated now lets upload
    #lets create a server path before uploading
    if ($_SESSION['log1'] == "client") {
        $server_path = "clientdp";
        if (!file_exists($server_path)) {
            mkdir($server_path);
        }
    } else if ($_SESSION['log1'] == "doctor") {
        $server_path = "docdp";
        if (!file_exists($server_path)) {
            mkdir($server_path);
        }
    }
    #after creating a folder we have to create a proper definate path
    //microtime();
    $server_path = $server_path . "/" . rand(1000, 9999) . "_" . $file_o_name;
    $id = $_SESSION['log']['Id'];
    #now upload
    $upload = move_uploaded_file($_FILES['img']['tmp_name'], $server_path) or die($_FILES['img']['error']);
    if ($upload) {
        #save data
        if ($_SESSION['log1'] == "client") {
            $saveData = mysqli_query($con, "UPDATE user SET Dp='$server_path' WHERE Id='$id' ") or die(mysqli_error($con));
        } else if ($_SESSION['log1'] == "doctor") {
            $saveData = mysqli_query($con, "UPDATE doctor SET Dp='$server_path' WHERE Id='$id' ") or die(mysqli_error($con));
        }
        if ($saveData) {
            echo '
            <script>
              alert("File uploaded successfully");
              window.location.href = "viewprofile.php";
            </script>
            ';
        }
    }
} else {
    echo '
    <script>
      alert("File type should be .jpg or .jpeg only");
      window.location.href = "editprofile.php";
    </script>
    ';
}
