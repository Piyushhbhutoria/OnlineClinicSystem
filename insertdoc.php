<?php include("config.php"); ?>
<h1>Insert New Doctor</h1>
<table>
	<form method="post">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" ></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="mail" ></td>
		</tr>
		<tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="dob" ></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><select name="gnd">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="addr" ></td>
		</tr>
		<tr>
			<td>Phone no.</td>
			<td><input type="text" name="phno"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="pwd"></td>
		</tr>
		<tr>
			<td>Fees</td>
			<td><input type="text" name="fee"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
		<tr>
			<td><input type="submit" name="btn" value="Insert"></td>
		</tr>
	</form>
</table>

<?php
	if (isset($_POST['btn'])) {
		$name = $_POST['name'];
		$email = $_POST['mail'];
		$dob = $_POST['dob'];
		$gnd = $_POST['gnd'];
		$addr = $_POST['addr'];
		$phno = $_POST['phno'];
		$pwd = $_POST['pwd'];
		$fee = $_POST['fee'];
		$dep = $_POST['category'];
		$qry = mysqli_query($con,"INSERT INTO logins (email, password, type) VALUES ('$fname'.'$lname', '$pwd', 'doctor')");
		$res1 = mysqli_query($con,"INSERT INTO doctor (name, email, gender, address, phone, fee, department, picture) VALUES ('$name','$email', '$gnd', '$addr', '$phno', '$fee', '$dep','')");
		if($res1) {
		?>
			<script>
				alert ("Added Sucessfully");
				window.location.href = "update.php";
			</script>
		<?php
		} else {
			?>
			<script>
				alert ("Add Unsucessful");
				window.location.href = "insertdoc.php";
			</script>
		<?php
		}
	}
	?>