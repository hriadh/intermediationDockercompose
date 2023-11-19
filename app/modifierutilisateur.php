<?php

session_start();
include('dbcon.php');

include('header.php');
include('navbar.php');


?>


  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   



                    <div class="card-header">
                        <h4>Modifier utilisateur 
                            <a href="espaceadmin.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                    <?php
                   if(isset($_GET['id']))
                   {
                    $id_utilisateur = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM utilisateur WHERE IdUser ='$id_utilisateur'";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) >0) 
                    {
                        $utilisateur = mysqli_fetch_array($query_run);

                    ?>


                        <form action="code.php" method="POST">
                            <input type="hidden" name="id_utilisateur" value="<?= $id_utilisateur ?>">

                            <div class="mb-3">
                                <label>Nom utilisateur</label>
                                <input type="text" name="nom" value="<?=$utilisateur['nomUser']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Prénom utilisateur</label>
                                <input type="text" name="prenom" value="<?=$utilisateur['PrenomUser']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="<?=$utilisateur['MailUser']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mot de passe</label>
                                <input type="password" name="mdp" value="<?=$utilisateur['mdpUser']?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mobile</label>
                                <input type="text" name="mobile" value="<?=$utilisateur['MobileUser']?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Adresse</label>
                                <input type="text" name="adresse" value="<?=$utilisateur['AdresseUser']?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Profil</label>
                                <input type="text" name="profile" value="<?=$utilisateur['profileUser']?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="modifier_utilisateur" class="btn btn-primary">Modifier</button>
                            </div>

                        </form>

                        <?php

                    }
                    else{
                        echo " <h4> ID introuvable</h4>";
                    }
                   }
                   ?> 

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
