<?php 
include('config.php'); 
?>
<h1>Insert New</h1>

<table>
	<form method="post">
		<tr>
			<td>Test Name</td>
			<td><input type="text" name="testname"></td>
		</tr>
		<tr>
			<td>Test Fee</td>
			<td><input type="number" name="testfee"></td>
		</tr>
		<tr>
			<td><input type="submit" name="btn" value="Insert"></td>
		</tr>
	</form>
</table>


<?php
	if(isset($_POST['btn']))
	{
	$testname=$_POST['testname'];
	$testfee=$_POST['testfee'];
	$res=mysqli_query($con,"INSERT INTO test (test_name,test_cost) VALUES ('$testname','$testfee')");
	if($res==1)
	{
		?>
		<script>
		alert ("Insertion Sucesssful");
		window.location.href="update.php";
	</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert ("Insertion Unucesssful");
		window.location.href="update.php";
	</script>
		<?php
	}
	}
	?>