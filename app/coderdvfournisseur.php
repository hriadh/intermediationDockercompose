<?php
session_start();
require 'dbcon.php';


if(isset($_POST['supprimer_rdvfournisseur']))
{
    $id_rdvfournisseur = mysqli_real_escape_string($con, $_POST['supprimer_rdvfournisseur']);

    $query = "DELETE FROM testproposer WHERE IdProposition='$id_rdvfournisseur' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Rendez-vous supprimé";
        header("Location: mesrdvfournisseur.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Suppression Rendez-vous non aboutie";
        header("Location: mesrdvfournisseur.php");
        exit(0);
    }
}

if(isset($_POST['reporterrdvfournisseur']))
{
    $id_rdv = ($_POST['IdPropositionrdv']);
    $DateRDV = date('Y-m-d', strtotime($_POST['datedebut']));
    $Heure = ($_POST['heuredebut']);

    
    $query = "UPDATE testproposer SET dateProposition ='$DateRDV', heureProposition ='$Heure' WHERE IdProposition='$id_rdv' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Rendez-vous reporté";
        header("Location: mesrdvfournisseur.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Modification report rendez-vous non aboutie";
        header("Location: mesrdvfournisseur.php");
        exit(0);
    }

}



?>