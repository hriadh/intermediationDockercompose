<?php


include('dbcon.php');
session_start();

include('header.php');
include('navbar.php');


?>

<div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h4>Mes services

                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="ajouterservice.php" class="btn btn-primary float-end">Ajouter service</a>
                            <a href="mesrdvfournisseur.php" class="btn btn-warning float-end">Mes Rendez-vous</a>
                              
                            </div>



                        </h4>
                    </div>

        	

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom Service</th>
            <th>Description </th>
            <th>Cout </th>
            
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        <?php 

            $query = "SELECT * FROM service  ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $service)
                {
                    ?>
                    <tr>
                        <td><?= $service['IdService']; ?></td>
                        <td><?= $service['nomService']; ?></td>
                        <td><?= $service['descriptionService']; ?></td>
                        <td><?= $service['cout']; ?></td>
                                            
                        <td>
                            <a href="infoservice.php?id=<?= $service['IdService']; ?>" class="btn btn-info btn-sm">Détails</a>
                            <a href="modifieservice.php?id=<?= $service['IdService']; ?>" class="btn btn-success btn-sm">Modifier</a>
                            <form action="codeservice.php" method="POST" class="d-inline">
                                <button type="submit" name="supprimer_service" value="<?=$service['IdService'];?>" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>


                            <a href="proposerrdvservice.php?id=<?= $service['IdService']; ?>" class="btn btn-info btn-sm">Proposer RDV</a>


                        </td>
                    </tr>
                    <?php
                }
            }
            else
            {
                echo "<h5> Pas d'enregistrement trouvé </h5>";
            }
        ?>
        
    </tbody>
</table>

</div>
</div>
</div>
</div>
</div>



<?php

include('footer.php');

?>