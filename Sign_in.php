<?php 
	include('config.php');
	session_start();
	$email = $_POST['a1'];
	$pwd = $_POST['a2'];
	$qry1 = mysqli_query($con,"SELECT * FROM logins WHERE email='$email' and password='$pwd' ");
	$qry2 = mysqli_num_rows($qry1);
	if($qry2) {
		$row = mysqli_fetch_array($qry1);
		if ($row['type'] == 'client') {
			$qry1 = mysqli_query($con,"SELECT * FROM user WHERE email='$email' ");
		} else if ($row['type'] == 'doctor') {
			$qry1 = mysqli_query($con,"SELECT * FROM doctor WHERE email='$email' ");
		}
		$row1 = mysqli_fetch_array($qry1);
		$_SESSION['log'] = $row1;
		$_SESSION['log1'] = $row['type'];
		header("location:index.php");
	} else {
		?>
		<script>
			alert ("Wrong Email ID or Password");
			window.location.href = "Signin.php";
		</script>
	<?php	
	}
?>
