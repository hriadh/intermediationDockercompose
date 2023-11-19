<?php
session_start();
include('dbcon.php');

if (isset($_POST['inscription'])) {
	$nom = mysqli_real_escape_string($con, $_POST['nom']);
	$prenom = mysqli_real_escape_string($con, $_POST['prenom']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mdp = mysqli_real_escape_string($con, $_POST['mdp']);
	$cmdp = mysqli_real_escape_string($con, $_POST['cmdp']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$adresse = mysqli_real_escape_string($con, $_POST['adresse']);
	$profile = mysqli_real_escape_string($con, $_POST['profile']);

	if ($mdp == $cmdp) 
	{
		$checkemail = "SELECT MailUser FROM utilisateur WHERE MailUser='$email' ";
		$checkemail_run = mysqli_query($con, $checkemail);

		if(mysqli_num_rows($checkemail_run) > 0){
			$_SESSION['message'] = "Adresse Email existe";
			header("Location: inscription.php");
			exit(0);

		}
		else{
			$user_query = "INSERT INTO utilisateur (mdpUser,nomUser,PrenomUser,MailUser,MobileUser,AdresseUser,profileUser) VALUES ('$mdp','$nom', '$prenom', '$email', '$mobile', '$adresse','$profile')";
			$user_query_run= mysqli_query($con, $user_query);

			if ($user_query_run) {
				$_SESSION['message'] = "Utilisateur ajouté avec succès";
			header("Location: login.php");
			exit(0);
			}
			else{
				$_SESSION['message'] = "Ajout utilisateur échoué";
			header("Location: inscription.php");
			exit(0);
			}
		}
	}

	else{
		$_SESSION['message'] = "Confirmation mot de passe erronée..";
		header("Location: inscription.php");
		exit(0);
	}
}
else{
	header("Location: inscription.php");
	exit(0);
}

?>