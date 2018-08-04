<?php 
	include ('config.php');
	$id = $_GET['id'];
	$res = mysqli_query($con,"DELETE FROM doctor WHERE id = '$id'");
	if($res == 1) {
		?>
		<script>
			alert ("Deleted Sucessfully");
			window.location.href = "update.php";
		</script>
	<?php
	} else {
		?>
		<script>
			alert ("Delete Unsucessful");
			window.location.href = "update.php";
		</script>
	<?php
	}
?>