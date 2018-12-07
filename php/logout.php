<?php 
	session_start();
	$_SESSION['user_id'];
	$_SESSION['user_name'];

	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);

	session_unset();
	session_destroy();

	header("location: ../index.php");
 ?>
