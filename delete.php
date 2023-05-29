<?php
include('src/functions.php');
include('src/config.php');
$id = $_GET['id'];
$data = $_GET['data'];
if ($data == 'doctor') {
  $res = mysqli_query($con, "DELETE FROM doctor WHERE id = '$id'");
} else if ($data == 'test') {
  $res = mysqli_query($con, "DELETE FROM test WHERE id = '$id'");
}
if ($res == 1) {
  alert("Deleted Sucessfully");
  header("location:update.php");
} else {
  alert("Delete Unsucessful");
  header("location:update.php");
}
