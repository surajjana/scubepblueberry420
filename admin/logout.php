<?php 
	
	require_once '../includes/bootstrap.php';
	require_once 'adminfunctions.php';

	if (is_admin()) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();

	}
	header("Location: ..");
	exit;

?>