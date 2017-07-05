<?php
	session_start();
	echo 'Welcome '.$_SESSION["name"];
	
	echo '<a href="index1.php">Home</a>';
?>