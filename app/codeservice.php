<?php
session_start();
require 'dbcon.php';


if(isset($_POST['supprimer_service']))
{
    $id_service = mysqli_real_escape_string($con, $_POST['supprimer_service']);

    $query = "DELETE FROM service WHERE IdService='$id_service' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Service supprimé";
        header("Location: espacefournisseur.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "suppression service non aboutie";
        header("Location: espacefournisseur.php");
        exit(0);
    }
}

if(isset($_POST['modifier_service']))
{
    $id_service = mysqli_real_escape_string($con, $_POST['id_service']);

    $nomservice = mysqli_real_escape_string($con, $_POST['nomservice']);
    $description = mysqli_real_escape_string($con, $_POST['descriptionService']);
    $cout = mysqli_real_escape_string($con, $_POST['coutService']);
    $dcreationservice = mysqli_real_escape_string($con, $_POST['dcreationservice']);
    



    $query = "UPDATE service SET nomService='$nomservice', descriptionService='$description', cout='$cout' WHERE dcreationService='$dcreationservice' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Modification informations service effectuée";
        header("Location: espacefournisseur.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Modification informations utilisateur non aboutie";
        header("Location: espacefournisseur.php");
        exit(0);
    }

}


if(isset($_POST['ajouter_service']))
{
    $nomservice = mysqli_real_escape_string($con, $_POST['nomservice']);
    $descriptionservice = mysqli_real_escape_string($con, $_POST['descriptionService']);
    $coutservice = mysqli_real_escape_string($con, $_POST['coutService']);
    
    $query = "INSERT INTO service (nomService,descriptionService,cout) VALUES ('$nomservice','$descriptionservice','$coutservice')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Service enregistré";
        header("Location: ajouterservice.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Enregistrement service non aboutit";
        header("Location: ajouterservice.php.php");
        exit(0);
    }
}

?>