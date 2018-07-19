<?php 
include('config.php');
session_start();

$id=$_SESSION['log']['Id'];
$email=$_POST['mail'];
$phno=$_POST['phno'];
if($_SESSION['log1']=="client")
{
	$name=$_POST['nam'];
	$addr=$_POST['addr'];
	$res=mysqli_query($con,"UPDATE client SET Name='$name',Email='$email',Address='$addr',Phoneno='$phno' WHERE Id='$id' ");
}
else if($_SESSION['log1']=="admin")
{
	$res=mysqli_query($con,"UPDATE admin SET Email='$email',Phoneno='$phno' WHERE Id='$id' ");
}
else if($_SESSION['log1']=="doctor")
{
	$addr=$_POST['addr'];
	$res=mysqli_query($con,"UPDATE doctor SET Address='$addr',Email='$email',Phoneno='$phno' WHERE Id='$id' ");
}
if($res==1)
{
	?>
<script>
alert ("Details Updated");
window.location.href = "view profile.php";
</script>
	<?php
}
else
{
	?>
<script>
alert ("Details not Updated");
window.location.href = "edit profile.php";
</script>
	<?php
}
	?>