<?php


include('dbcon.php');
session_start();
include('header.php');
include('navbar.php');


?>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   



                    <div class="card-header">
                        <h4>Détails service 
                            <a href="espacefournisseur.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                    <?php
                   if(isset($_GET['id']))
                   {
                    $id_service = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM service WHERE IdService ='$id_service'";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) >0) 
                    {
                        $service = mysqli_fetch_array($query_run);

                    ?>


                            
                            

                            <div class="mb-3">
                                <label>Nom service</label>
                                <p class="form-control"> <?=$service['nomService'];?> </p>                             
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <p class="form-control"> <?=$service['descriptionService'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Cout</label>
                                <p class="form-control"> <?=$service['cout'];?> </p>
                                
                            </div>
                            

                            </div>
                            <div class="mb-3">
                                <label>Choisissez un créneau</label>
                                
                                <form action="codeproposerservice.php" method="GET">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Date début</label>
                                        <input type="date" name="datedebut" class="form-control">
                                        <input type="hidden" name="id_service" value="<?= $id_service ?>">

                                                    
                                        </div>
                                                
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Heure debut</label>
                                        <input type="time" name="heuredebut" class="form-control">

                                         <br>
                                    <button type="submit" name="ajouterrdv" class="btn btn-primary float-end">Ajouter</button>           
                                                                                    
                                </div>
                                                                                
                                </div>
                                        
                            </form>
                                
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
