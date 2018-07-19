<?php 
session_start();
session_destroy();
?>
<script>
alert ("Logged out successfully");
window.location.href = "Sign in.php";
</script>
