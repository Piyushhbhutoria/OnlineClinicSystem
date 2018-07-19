<?php 
include('config.php');
session_start();
?>

<h3>Upload Report</h3>

<form method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>File Name</td>
		<td><input type="text" name="file_name"></td>
	</tr>
	<tr>
		<td>Upload file:</td>
		<td><input type="file" name="img"></td>
	</tr>
	<tr>
		<td><input type="submit" name="btn" value="Upload"></td>
	</tr>
</table>	
</form>

<?php
	$id = $_GET['id'];
	if(isset($_POST['btn']))
	{
		#normal data type varible
		$file_name = $_POST['file_name'];
		#file type
		$file_o_name = $_FILES['img']['name'];
		$file_size = $_FILES['img']['size'];
		$file_type = $_FILES['img']['type'];
		
		if($file_size > 1572864)
		{
			echo "File Size Exceeded!!!";
			exit;
		}
		
		/*echo "file type is ".$file_type.'<br>';
		echo "file size is ".$file_size.'<br>';
		echo "file orig name is ".$file_o_name.'<br>';*/
		
		if($file_type == "application/pdf")
		{
			#after the file gets validated now lets upload 
			#lets create a server path before uploading
			$server_path = "testreports";
			if(!file_exists($server_path))
			{
				mkdir($server_path);
			}
			#after creating a folder we have to create a proper definate path 
			//microtime();
			$server_path = $server_path."/".rand(1000,9999)."_".$file_o_name;
			
			#now upload
			$upload = move_uploaded_file($_FILES['img']['tmp_name'],$server_path) or die($_FILES['img']['error']);
			if($upload)
			{
			#save data
				$saveData = mysqli_query($con,"UPDATE test_appointment SET Report='$server_path' WHERE Id='$id' ")or die(mysqli_error());
				if($saveData)
				{
					?>
				<script>
				alert ("Uploaded Sucessfully");
				window.location.href = "upload.php";
				</script>
		<?php
				}
			}
		}
		else
		{
			echo "File type should be pdf only";
		}
	}
	?>