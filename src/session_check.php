<?php
include('/functions.php');
if (empty($_SESSION['user_data']) == true) {
  alert_and_redirect("Login first!", "index.php");
}
