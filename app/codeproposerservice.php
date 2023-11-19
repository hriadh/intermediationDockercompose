<?php

session_start();
include('dbcon.php');

include('header.php');
include('navbar.php');




if(isset($_GET['ajouterrdv']))
{
    $id_service = ($_GET['id_service']);
    $datedebut = date('Y-m-d', strtotime($_GET['datedebut']));
    $heuredebut = ($_GET['heuredebut']);
    
    $query = "INSERT INTO testproposer (dateProposition,heureProposition, IdService) VALUES ('$datedebut','$heuredebut','$id_service')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Rendez vous ajouté";
        header("Location: espacefournisseur.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Enregistrement rendez-vous non aboutit";
        header("Location: espacefournisseur.php");
        exit(0);
    }
}

?>
  
    