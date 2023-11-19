<?php

session_start();

if(isset($_POST['logout'] )){
	unset($_SESSION['auth']);
	unset($_SESSION['auth_profile']);
	unset($_SESSION['auth_user']);

	$_SESSION['message'] ="Vous etes déconnecté ..";
	header("Location: login.php");
	exit(0);
}


?>