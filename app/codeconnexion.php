<?php
session_start();
include('dbcon.php');

if (isset($_POST['Connexion'])) 
{
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$mdp = mysqli_real_escape_string($con, $_POST['mdp']);

	$login_query = "SELECT * FROM utilisateur WHERE MailUser = '$id' AND mdpUser = '$mdp' LIMIT 1";
	$login_query_run = mysqli_query($con, $login_query);

	if (mysqli_num_rows($login_query_run) > 0) 
		{ 
			foreach ($login_query_run as $data) 
				{
					$user_id = $data['IdUser'];
					$user_nom = $data['nomUser']. ' '.$data['PrenomUser'];
					$user_email = $data['MailUser'];
					$user_profile = $data['profileUser'];

				}

		$_SESSION['auth'] = true;
		$_SESSION['auth_profile'] = "$user_profile";
		$_SESSION['auth_user'] = [

			'user_id'=>$user_id,
			'user_nom'=>$user_nom,
			'user_email'=>$user_email,
		];

		if ($_SESSION['auth_profile'] == "Admin") 
		{
		$_SESSION['message'] = "Bienvenu sur l'espace Admin";
		header("Location: espaceadmin.php");
		exit(0);
		}
		elseif ($_SESSION['auth_profile'] == "Client") {
		$_SESSION['message'] = "Bienvenu sur l'espace Client";
		header("Location: index.php");
		exit(0);
			
		}
		elseif ($_SESSION['auth_profile'] == "Fournisseur"){
		$_SESSION['message'] = "Bienvenu sur l'espace Fournisseur";
		header("Location: espacefournisseur.php");
		exit(0);

		}



	}
	else{
		$_SESSION['message'] = "Identifiant ou mot de passe invalide";
		header("Location: login.php");
		exit(0);

	}
}
else{
	$_SESSION['message'] = "Vous n'etes pas autorisé à accéder à cette page";
	header("Location: login.php");
	exit(0);
}

?>