<?php
include ('config.php');
$id = $_GET['id'];
$res = mysqli_query($con,"UPDATE doctor_app SET Status = 'Rejected' WHERE Id = '$id'");
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