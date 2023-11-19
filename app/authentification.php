<?php

session_start();
if(!isset($_SESSION['auth']))
	{
		$_SESSION['message'] = "Connectez vous pour accéder à cette page";
		header("Location: login.php");
		exit(0);
	}
else{

	if ($_SESSION['auth_profile'] != "Admin") {
		$_SESSION['message'] = "Vous n'etes pas autorisé à accéder à cette page";
		header("Location: login.php");
		exit(0);
	}


}

?>