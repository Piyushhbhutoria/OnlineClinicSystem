<?php
include ('config.php');
$id = $_GET['id'];
$res = mysqli_query($con,"delete from test_appointment where id = '$id'");
if($res == 1) {
    ?>
    <script>
        alert ("Deleted Sucessfully");
        window.location.href = "appointments.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert ("Delete Unsucessful");
        window.location.href = "appointments.php";
    </script>
    <?php
}
?>