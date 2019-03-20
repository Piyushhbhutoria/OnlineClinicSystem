<?php include('config.php'); ?>
    <h1>Edit</h1>
<?php
$id = $_GET['id'];
$res = mysqli_query($con,"SELECT * FROM doctor WHERE id = '$id' ");
$row = mysqli_fetch_array($res);
?>
    <table>
        <form method = "post">
            <tr>
                <td>Doctor Name</td>
                <td><input type = "text" name = "name" value = "<?php echo $row['Name'] ?>"></td>
            </tr>
            <tr>
                <td>Test Fee</td>
                <td><input type = "number" name = "fee" value = "<?php echo $row['Fees'] ?>"></td>
            </tr>
            <tr>
                <td><input type = "submit" name = "btn" value = "Update"></td>
            </tr>
        </form>
    </table>
<?php
if (isset($_POST['btn'])) {
    $testname = $_POST['name'];
    $testfee = $_POST['fee'];
    $res1 = mysqli_query($con,"UPDATE doctor SET Name = '$testname', Fees = '$testfee' WHERE id = '$id' ");
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