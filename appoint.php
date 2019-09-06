<?php
include("src/config.php");
session_start();
if (isset($_SESSION['log']) == "") {
    echo '
    <script>
      alert("Sign in First");
    </script>
    ';
    header("location:signin.php");
} else {
    $id = $_SESSION['log']['Id'];
    $test = $_POST['test'];
    $appdate = $_POST['appdate1'];
    $apptime = $_POST['apptime1'];
    $qry = mysqli_query($con, "INSERT INTO test_appointment (Test_name,Test_time,Test_date,Users_id,Report) VALUES ('$test','$apptime','$appdate','$id','')");
    if ($qry) {
        echo '
        <script>
          alert("Appointment set Sucessfully");
        </script>
        ';
        header("location:appointments.php");
    } else {
        echo '
        <script>
          alert("Appointment set Unsucessful RETRY!");
        </script>
        ';
        header("location:index.php");
    }
}
?>
