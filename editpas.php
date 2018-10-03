<?php 
	include('config.php');
	session_start();

	$id = $_SESSION['log']['id'];
	$pwd = $_POST['pwd'];
	$repwd = $_POST['repwd'];
	if ($pwd==$repwd) {
		if($_SESSION['log1']=="client") {
			$res = mysqli_query($con,"UPDATE user SET Password='$pwd' WHERE Id='$id' ");
		} else if($_SESSION['log1'] == "admin") {
			$res = mysqli_query($con,"UPDATE admin SET Password='$pwd' WHERE Id='$id' ");
		} else if($_SESSION['log1'] == "doctor") {
			$res = mysqli_query($con,"UPDATE doctor SET Password='$pwd' WHERE Id='$id' ");
		} 
		if($res==1) {
		?>
			<script>
				alert ("Password Updated Successfully!");
				window.location.href = "viewprofile.php";
			</script>
		<?php } else { ?>
			<script>
				alert ("Password not Updated");
				window.location.href = "editprofile.php";
			</script>
		<?php
		} 
	} else {
		?>
		<script>
			alert ("Passwords Doesn't match.");
			window.location.href = "viewprofile.php";
		</script>
		<?php
	}
?>