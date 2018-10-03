<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
	include('config.php');
	$name = $_POST['fname'].$_POST['lname'];
	$email = $_POST['mail'];
	$dob = $_POST['dob'];
	$gnd = $_POST['gnd'];
	$addr = $_POST['addr'];
	$phno = $_POST['phno'];
	$pwd = $_POST['pwd'];
	$repwd = $_POST['repwd'];
	if ($pwd == $repwd) {
		$qry1  =  mysqli_query($con,"SELECT * FROM logins WHERE email = '$email'")or die(mysqli_error($con));
		$qry2  =  mysqli_num_rows($qry1);
		if($qry2 == 0) {
			$qry = mysqli_query($con,"INSERT INTO logins (email, password, type) VALUES ('$email', '$pwd', 'client')")or die(mysqli_error($con));
			$qry3 = mysqli_query($con,"INSERT INTO user (name, email, dob, gender, address, phone, picture) VALUES ('$name', '$email', '$dob', '$gnd', '$addr', '$phno', 'null')")or die(mysqli_error($con));
			?>
			<script>
				alert ("Registered Successfullly");
				window.location.href = "Signin.php";
			</script>
			<?php
		} else {
			?>
			<script>
				alert ("Email already Registered");
				window.location.href = "Register.php";
			</script>
			<?php
		}
	} else {
		?>
		<script>
			alert ("password doesn't match");
			window.location.href = "Register.php";
		</script>
		<?php
	}
?>
