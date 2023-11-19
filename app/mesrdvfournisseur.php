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
                        
                        <h4>Mes rendez-vous
                            <a href="espacefournisseur.php" class="btn btn-danger float-end">Retour</a>
                        
                        </h4>
                    </div>

        	

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date début</th>
            <th>Heure début </th>
            <th>Nom Service </th>
            
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        <?php 

            $query = "SELECT * FROM testproposer  ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $rdv)
                {
                    ?>
                    <tr>
                        <td><?= $rdv['IdProposition']; ?></td>
                        <td><?= $rdv['dateProposition']; ?></td>
                        <td><?= $rdv['heureProposition']; ?></td>
                        <td><?= $rdv['IdService']; ?></td>
                                            
                        <td>
                            
                            <a href="reporterrdv.php?id=<?= $rdv['IdProposition']; ?>" class="btn btn-success btn-sm">Reporter</a>
                            <form action="coderdvfournisseur.php" method="POST" class="d-inline">
                                <button type="submit" name="supprimer_rdvfournisseur" value="<?=$rdv['IdProposition'];?>" class="btn btn-danger btn-sm">Supprimer</button>
                                
                            </form>


                            
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