<?php include ('config.php') ?>
<?php session_start() ?>


<?php 
$id=$_GET['id'];
$status="Rejected";
$res=mysqli_query($con,"update doctor_app set Status='$status' where Id='$id'");
if($res==1)
{
	?>
	<script>
		alert ("Deleted Sucessfully");
		window.location.href = "appointments.php";
	</script>
<?php
}
else
{
	?>
	<script>
		alert ("Delete Unsucessful");
		window.location.href = "appointments.php";
	</script>
<?php
}
?>