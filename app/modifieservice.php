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
                        <h4>Modifier service 
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


                        <form action="codeservice.php" method="POST">
                            <input type="hidden" name="id_service" value="<?= $id_service ?>">

                            <div class="mb-3">
                                <label>Nom service</label>
                                <input type="text" name="nomservice" value="<?=$service['nomService']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="descriptionService" value="<?=$service['descriptionService']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cout</label>
                                <input type="text" name="coutService" value="<?=$service['cout']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date creation</label>
                                <input type="text" name="dcreationservice" value="<?=$service['dcreationService']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="modifier_service" class="btn btn-primary">Modifier</button>
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
