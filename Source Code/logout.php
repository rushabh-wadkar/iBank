<?php
	session_start();
	session_destroy();
	echo 'Logging out.. Please wait.';
	header("Refresh:1; url=login.php")
?>