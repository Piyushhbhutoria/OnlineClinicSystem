<?php
include('src/config.php');
$id = $_GET['id'];
$action = $_GET['action'];
$data = $_GET['data'];
if ($data == 'test') {
  $res = mysqli_query($con, "DELETE FROM test_appointment WHERE id = '$id'");
  if ($res == 1) {
    echo '
        <script>
          alert("Deleted Sucessfully");
        </script>
        ';
    header("location:appointments.php");
  } else {
    echo '
        <script>
          alert("Delete Unsucessful");
        </script>
        ';
    header("location:appointments.php");
  }
} else if ($data == 'doctor') {
  if ($action == 'delete') {
    $res = mysqli_query($con, "DELETE FROM doctor_app WHERE id = '$id' ");
    if ($res == 1) {
      echo '
            <script>
              alert("Deleted Sucessfully");
            </script>
            ';
      header("location:appointments.php");
    } else {
      echo '
            <script>
              alert("Delete Unsucessful");
            </script>
            ';
      header("location:appointments.php");
    }
  } else if ($action == 'reject') {
    $res = mysqli_query($con, "UPDATE doctor_app SET Status = 'Rejected' WHERE Id = '$id'");
    if ($res == 1) {
      echo '
            <script>
              alert("Deleted Sucessfully");
            </script>
            ';
      header("location:appointments.php");
    } else {
      echo '
            <script>
              alert("Delete Unsucessful");
            </script>
            ';
      header("location:appointments.php");
    }
  }
}
