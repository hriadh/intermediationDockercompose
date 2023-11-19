<?php
include "connexionid.php";


if (isset($_POST['login']))
{
    $identifiant=$_POST['id'];
    $motdepasse=$_POST['mdp'];
    $sql="SELECT * FROM utilisateur WHERE IdUser ='$identifiant' AND mdpUser='$motdepasse'";
    
    $reponse = $con->query($sql);
    if($reponse->rowCount()>0)
    {
        if($donnees= $reponse->fetch())
        {
            $_SESSION['user']=$identifiant;
            if($donnees['profileUser']=="Client")
            {
                header('location:espaceclient.php');
            }
            else if($donnees['profileUser']=="Fournisseur")
                {header('location:espacefournisseur.php');}
            else
                {header('location:espaceadmin.php');}
        }
    }
    else
        {
        $_SESSION['message'] = "connexion non réussie";
        header("Location: login.php");
        exit(0);
        }
    
}

?>
