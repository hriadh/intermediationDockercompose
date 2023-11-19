<?php
session_start();
require 'dbcon.php';


if(isset($_POST['supprimer_utilisateur']))
{
    $id_utilisateur = mysqli_real_escape_string($con, $_POST['supprimer_utilisateur']);

    $query = "DELETE FROM utilisateur WHERE IdUser='$id_utilisateur' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "utilisateur supprimé";
        header("Location: espaceadmin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "suppression utilisateur non aboutie";
        header("Location: espaceadmin.php");
        exit(0);
    }
}

if(isset($_POST['modifier_utilisateur']))
{
    $id_utilisateur = mysqli_real_escape_string($con, $_POST['id_utilisateur']);

    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $adresse = mysqli_real_escape_string($con, $_POST['adresse']);
    $profile = mysqli_real_escape_string($con, $_POST['profile']);
    



    $query = "UPDATE utilisateur SET nomUser='$nom', PrenomUser='$prenom', MailUser='$email', mdpUser='$mdp' , MobileUser='$mobile', AdresseUser='$adresse', profileUser='$profile' WHERE idUser='$id_utilisateur' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Modification informations utilisateur effectuée";
        header("Location: espaceadmin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Modification informations utilisateur non aboutie";
        header("Location: espaceadmin.php");
        exit(0);
    }

}


if(isset($_POST['enregistrer_utilisateur']))
{
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $adresse = mysqli_real_escape_string($con, $_POST['adresse']);
    $profile = mysqli_real_escape_string($con, $_POST['profile']);

    $query = "INSERT INTO utilisateur (mdpUser,nomUser,PrenomUser,MailUser,MobileUser,AdresseUser,profileUser) VALUES ('$mdp','$nom','$prenom','$email','$mobile','$adresse','$profile')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Utilisateur enregistré";
        header("Location: ajouterutilisateur.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Enregistrement utilisateur non aboutit";
        header("Location: ajouterutilisateur.php.php");
        exit(0);
    }
}

?>