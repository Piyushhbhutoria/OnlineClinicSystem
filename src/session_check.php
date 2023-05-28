<?php
if (!isset($_SESSION['log']) || $_SESSION['log'] == '') {
  echo '
    <script>
      alert("Login first!");
      window.location.href = "index.php";
    </script>
    ';
}
