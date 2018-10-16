<?php 
	include('config.php'); 
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
		$name = $_SESSION['log']['Name'];
		$doc = $_POST['docname'];
		$appdate = $_POST['appdate'];
		$apptime = $_POST['apptime'];
		$qry = mysqli_query($con,"INSERT INTO doctor_app (Doc_name,App_date,App_time,User_id,User_name,Report) VALUES ('$doc','$appdate','$apptime','$id','$name','')");
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