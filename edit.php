<?php include('config.php'); ?>
<h1>Edit</h1>
<?php
	$id = $_GET['id'];
	$res = mysqli_query($con,"SELECT * FROM test WHERE id = '$id' ");
	$row = mysqli_fetch_array($res);
?>
<table>
	<form method = "post">
		<tr>
			<td>Test Name</td>
			<td><input type = "text" name = "testname" value = "<?php echo $row['test_name'] ?>"></td>
		</tr>
		<tr>
			<td>Test Fee</td>
			<td><input type = "number" name = "testfee" value = "<?php echo $row['test_cost'] ?>"></td>
		</tr>
		<tr>
			<td><input type = "submit" name = "btn" value = "Update"></td>
		</tr>
	</form>
</table>
<?php
	if (isset($_POST['btn'])) {
		$testname = $_POST['testname'];
		$testfee = $_POST['testfee'];
		$res1 = mysqli_query($con,"UPDATE test SET test_name = '$testname',test_cost = '$testfee' WHERE id = '$id' ");
		if($res1 == 1) {
		?>
			<script>
				alert ("Updated Sucessfully");
				window.location.href = "update.php";
			</script>
		<?php 
		} else { 
		?>
			<script>
				alert ("Update Unsucessful");
				window.location.href = "update.php";
			</script>
		<?php
		}
	}
?>