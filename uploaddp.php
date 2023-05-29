<?php
include('src/functions.php');
include('src/config.php');
session_start();
#normal data type varible
#file type
$file_o_name = $_FILES['img']['name'];
$file_size = $_FILES['img']['size'];
$file_type = $_FILES['img']['type'];
if ($file_size > 1572864) {
	die(alert_and_redirect("File Size Exceeded", "editprofile.php"));
}
/*echo "file type is ".$file_type.'<br>';
echo "file size is ".$file_size.'<br>';
echo "file orig name is ".$file_o_name.'<br>';*/
if ($file_type == "image/jpeg") {
	#after the file gets validated now lets upload
	#lets create a server path before uploading
	if ($_SESSION['user_type'] == "client") {
		$server_path = "clientdp";
		if (!file_exists($server_path)) {
			mkdir($server_path);
		}
	} else if ($_SESSION['user_type'] == "doctor") {
		$server_path = "docdp";
		if (!file_exists($server_path)) {
			mkdir($server_path);
		}
	}
	#after creating a folder we have to create a proper definate path
	//microtime();
	$server_path = $server_path . "/" . rand(1000, 9999) . "_" . $file_o_name;
	$id = $_SESSION['user_data']['id'];
	#now upload
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $server_path) or die($_FILES['img']['error']);
	if ($upload) {
		#save data
		if ($_SESSION['user_type'] == "client") {
			$saveData = mysqli_query($con, "UPDATE user SET Dp='$server_path' WHERE id='$id' ") or die(mysqli_error($con));
		} else if ($_SESSION['user_type'] == "doctor") {
			$saveData = mysqli_query($con, "UPDATE doctor SET Dp='$server_path' WHERE id='$id' ") or die(mysqli_error($con));
		}
		if ($saveData) {
			alert_and_redirect("File uploaded successfully", "viewprofile.php");
		}
	}
} else {
	alert_and_redirect("File type should be .jpg or .jpeg only", "editprofile.php");
}
