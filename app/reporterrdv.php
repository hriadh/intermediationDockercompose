<?php


include('dbcon.php');
include('authentification.php');
include('header.php');
include('navbar.php');


?>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   



                    <div class="card-header">
                        <h4>Détails rendez-vous 
                            <a href="mesrdvfournisseur.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                    <?php
                   if(isset($_GET['id']))
                   {
                    $id_rdvfournisseur = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM testproposer WHERE IdProposition ='$id_rdvfournisseur'";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) >0) 
                    {
                        $rdvf = mysqli_fetch_array($query_run);

                    ?>


                            
                            

                            <div class="mb-3">
                                <label>Id RDV</label>
                                <p class="form-control"> <?=$rdvf['IdProposition'];?> </p>                             
                            </div>
                            <div class="mb-3">
                                <label>Date RDV</label>
                                <p class="form-control"> <?=$rdvf['dateProposition'];?> </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Heure</label>
                                <p class="form-control"> <?=$rdvf['heureProposition'];?> </p>
                                
                            </div>
                            

                            </div>
                            <div class="mb-3">
                                <label>Choisissez un créneau</label>
                                
                                <form action="coderdvfournisseur.php" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Date début</label>
                                        <input type="date" name="datedebut" class="form-control">
                                        

                                                    
                                        </div>
                                                
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Heure debut</label>
                                        <input type="time" name="heuredebut" class="form-control">
                                        <input type="hidden" name="IdPropositionrdv" value="<?= $id_rdvfournisseur ?>">

                                         <br>
                                    <button type="submit" name="reporterrdvfournisseur" class="btn btn-primary float-end">Reporter</button>           
                                                                                    
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
