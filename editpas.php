<?php 
include('config.php');
session_start();

$id = $_SESSION['log']['id'];
$pwd = $_POST['pwd'];
$repwd = $_POST['repwd'];
if($_SESSION['log1']=="client")
{
	$res = mysqli_query($con,"UPDATE client SET Password='$pwd' WHERE Id='$id' ");
}
else if($_SESSION['log1']=="admin")
{
	$res = mysqli_query($con,"UPDATE admin SET Password='$pwd' WHERE Id='$id' ");
}
else if($_SESSION['log1']=="doctor")
{
	$res = mysqli_query($con,"UPDATE doctor SET Password='$pwd' WHERE Id='$id' ");
}
if($res==1 and $pwd==$repwd)
{
	?>
<script>
alert ("Password Updated");
window.location.href = "view profile.php";
</script>
	<?php
}
else
{
	?>
<script>
alert ("Password not Updated");
window.location.href = "edit profile.php";
</script>
	<?php
}
	?>