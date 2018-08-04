<?php 
	include ('config.php');
	$id = $_GET['id'];
	$res = mysqli_query($con,"DELETE FROM doctor_app WHERE id = '$id' ");
	if($res == 1) {
		?>
		<script>
			alert ("Deleted Sucessfully");
			window.location.href = "appointments.php";
		</script>
	<?php
	} else {
		?>
		<script>
			alert ("Delete Unsucessful");
			window.location.href = "appointments.php";
		</script>
	<?php
	}
?>