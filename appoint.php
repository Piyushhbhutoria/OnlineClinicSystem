<?php 
	include("config.php");
	session_start(); 
	if(isset($_SESSION['log']) == "") {
	?>
		<script>
			alert ("Sign in First");
			window.location.href = "Signin.php";
		</script>
		<?php
	} else {
		$id = $_SESSION['log']['Id'];
		$test = $_POST['test'];
		$appdate = $_POST['appdate1'];
		$apptime = $_POST['apptime1'];
		$qry = mysqli_query($con,"INSERT INTO test_appointment (Test_name,Test_time,Test_date,Users_id,Report) VALUES ('$test','$apptime','$appdate','$id','')");
		if($qry) {
		?>
			<script>
				alert ("Appointment set Sucessfully");
				window.location.href = "appointments.php";
			</script>
		<?php
		} else {
		?>
			<script>
				alert ("Appointment set Unsucessful RETRY!");
				window.location.href = "index.php";
			</script>
		<?php
		}
	}
?>