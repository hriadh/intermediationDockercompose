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
                                <label>Date creation</label>
                                <p class="form-control"> <?=$service['dcreationService'];?> </p>
                                
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
