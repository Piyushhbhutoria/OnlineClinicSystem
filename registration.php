<?php 
	include('config.php');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['mail'];
	$dob = $_POST['dob'];
	$gnd = $_POST['gnd'];
	$addr = $_POST['addr'];
	$phno = $_POST['phno'];
	$pwd = $_POST['pwd'];
	$repwd = $_POST['repwd'];
	$qry1  =  mysqli_query($con,"SELECT * FROM client WHERE Email = '$email'");
	$qry2  =  mysqli_num_rows($qry1);
	if($qry2 == 0 and $pwd == $repwd) {
		$qry = mysqli_query($con,"INSERT INTO client (Name, Email, Dob, Gender, Address, Phoneno, Password) VALUES ('$fname'.'$lname', '$email','$dob','$gnd','$addr','$phno','$pwd')")or die(mysqli_error());
		?>
		<script>
			alert ("Registered Successfullly");
			window.location.href = "Sign_in.php";
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
?>
