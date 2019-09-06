<?php include('src/config.php'); ?>
    <h1>Edit</h1>
<?php
$id = $_GET['id'];
$data = $_GET['data'];
if ($data == 'test') {
    $res = mysqli_query($con, "SELECT * FROM test WHERE id = '$id' ");
    $row = mysqli_fetch_array($res);
    ?>
    <table>
        <form method="post">
            <tr>
                <td>Test Name</td>
                <td><input type="text" name="testname" value="<?php echo $row['test_name'] ?>"></td>
            </tr>
            <tr>
                <td>Test Fee</td>
                <td><input type="number" name="testfee" value="<?php echo $row['test_cost'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="Update"></td>
            </tr>
        </form>
    </table>
    <?php
} else if ($data == 'doctor') {
    $res = mysqli_query($con, "SELECT * FROM doctor WHERE id = '$id' ");
    $row = mysqli_fetch_array($res);
    ?>
    <table>
        <form method="post">
            <tr>
                <td>Doctor Name</td>
                <td><input type="text" name="name" value="<?php echo $row['Name'] ?>"></td>
            </tr>
            <tr>
                <td>Test Fee</td>
                <td><input type="number" name="fee" value="<?php echo $row['Fees'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="Update"></td>
            </tr>
        </form>
    </table>
    <?php
}

if (isset($_POST['btn'])) {
    if ($data == 'test') {
        $testname = $_POST['testname'];
        $testfee = $_POST['testfee'];
        $res1 = mysqli_query($con, "UPDATE test SET test_name = '$testname',test_cost = '$testfee' WHERE id = '$id' ");
        if ($res1 == 1) {
            echo '
            <script>
              alert("Updated Sucessfully");
            </script>
            ';
            header("location:update.php");
        } else {
            echo '
            <script>
              alert("Update Unsucessful");
            </script>
            ';
            header("location:update.php");
        }
    } else if ($data == 'doctor') {
        $testname = $_POST['name'];
        $testfee = $_POST['fee'];
        $res1 = mysqli_query($con, "UPDATE doctor SET Name = '$testname', Fees = '$testfee' WHERE id = '$id' ");
        if ($res1 == 1) {
            echo '
            <script>
              alert("Updated Sucessfully");
            </script>
            ';
            header("location:update.php");
        } else {
            echo '
            <script>
              alert("Update Unsucessful");
            </script>
            ';
            header("location:update.php");
        }
    }
}
