<?php 
	include('config.php');
	session_start();

	$id = $_SESSION['log']['Id'];
	$email = $_POST['mail'];
	$phno = $_POST['phno'];
	if($_SESSION['log1'] == "client") {
		$name = $_POST['nam'];
		$addr = $_POST['addr'];
		$res = mysqli_query($con,"UPDATE user SET Name = '$name',Email = '$email',Address = '$addr',phone = '$phno' WHERE Id = '$id' ");
		$qry1 = mysqli_query($con,"SELECT * FROM user WHERE Email='$email'");
		$qry2 = mysqli_num_rows($qry1);
		$row = mysqli_fetch_array($qry1);
		$_SESSION['log']=$row;
	} else if($_SESSION['log1'] == "admin") {
		$res = mysqli_query($con,"UPDATE admin SET Email = '$email',phone = '$phno' WHERE Id = '$id' ");
		$qry3 = mysqli_query($con,"SELECT * FROM admin WHERE Email='$email'");
		$qry4 = mysqli_num_rows($qry3);
		$row = mysqli_fetch_array($qry3);
		$_SESSION['log']=$row;
	} else if($_SESSION['log1'] == "doctor") {
		$addr = $_POST['addr'];
		$res = mysqli_query($con,"UPDATE doctor SET Address = '$addr',Email = '$email',phone = '$phno' WHERE Id = '$id' ");
		$qry5 = mysqli_query($con,"SELECT * FROM doctor WHERE Email='$email'");
		$qry6 = mysqli_num_rows($qry5);
		$row = mysqli_fetch_array($qry5);
		$_SESSION['log']=$row;
	}
	if($res == 1) {
		?>
		<script>
			alert ("Details Updated");
			window.location.href = "viewprofile.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Details not Updated");
			window.location.href = "editprofile.php";
		</script>
		<?php
	}
?>