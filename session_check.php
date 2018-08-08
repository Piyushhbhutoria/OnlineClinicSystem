<?php
if(isset($_SESSION['log']) || !empty($_SESSION['log'])) {
?>
	<script>
		alert ("Login first!");
		window.location.href = "index.php";
	</script>
<?php
}
?>