<?php

session_start();
include('dbcon.php');

include('header.php');
include('navbar.php');


?>
  
    <div class="container mt-5">

       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   



                    <div class="card-header">
                        <h4>Détails utilisateur 
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


                       
                            

                            <div class="mb-3">
                                <label>Nom utilisateur</label>
                                <p class="form-control"> <?=$utilisateur['nomUser'];?> </p>                             
                            </div>
                            <div class="mb-3">
                                <label>Prénom utilisateur</label>
                                <p class="form-control"> <?=$utilisateur['PrenomUser'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <p class="form-control"> <?=$utilisateur['MailUser'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Mot de passe</label>
                                <p class="form-control"> <?=$utilisateur['mdpUser'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Mobile</label>
                                <p class="form-control"> <?=$utilisateur['MobileUser'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Adresse</label>
                                <p class="form-control"> <?=$utilisateur['AdresseUser'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Profil</label>
                                <p class="form-control"> <?=$utilisateur['profileUser'];?> </p>
                                
                            </div>

                            </div>
                            <div class="mb-3">
                                <label>Date creation</label>
                                <p class="form-control"> <?=$utilisateur['dcreationUser'];?> </p>
                                
                            </div>
                            

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
