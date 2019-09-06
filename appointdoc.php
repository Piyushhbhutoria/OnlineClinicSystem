<?php
include('src/config.php');
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
    $name = $_SESSION['log']['Name'];
    $doc = $_POST['docname'];
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];
    $qry = mysqli_query($con, "INSERT INTO doctor_app (Doc_name,App_date,App_time,Users_id,User_name,Report,Status) VALUES ('$doc','$appdate','$apptime','$id','$name','','Accepted')");
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