<?php
	session_start();
	if(isset($_SESSION['user'])){
		session_destroy();
		echo "<script>document.location.href='login.php';</script>";
	}
?>