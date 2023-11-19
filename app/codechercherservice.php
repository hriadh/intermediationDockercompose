<?php
session_start();
require 'dbcon.php';

if (isset($_GET['chercherservice'])) {
	$chercher = $_GET['chercherservice'];
	$query = "SELECT * FROM service WHERE CONCAT(nomService,descriptionService) LIKE '%$chercher%' ";
	$query_run = mysqli_query($con, $query);

	if (mysqli_num_rows ($query_run>0)) {
		foreach($query_run as $service)
		{
			
		}

		
	}
	else{

	}

}


?>