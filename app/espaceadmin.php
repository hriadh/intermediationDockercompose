<?php


include('dbcon.php');

include('authentification.php');
include('header.php');
include('navbar.php');


?>

<div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h4>Mes utilisateurs
                            <a href="ajouterutilisateur.php" class="btn btn-primary float-end">Ajouter utilisateur</a>
                        </h4>
                    </div>

        	

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom </th>
            <th>Email </th>
            <th>Mot de passe</th>
            <th>Mobile </th>
            <th>Adresse</th>
            <th>Profil</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 

            $query = "SELECT * FROM utilisateur";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $utilisateur)
                {
                    ?>
                    <tr>
                        <td><?= $utilisateur['IdUser']; ?></td>
                        <td><?= $utilisateur['nomUser']; ?></td>
                        <td><?= $utilisateur['PrenomUser']; ?></td>
                        <td><?= $utilisateur['MailUser']; ?></td>
                        <td><?= $utilisateur['mdpUser']; ?></td>
                        <td><?= $utilisateur['MobileUser']; ?></td>
                        <td><?= $utilisateur['AdresseUser']; ?></td>
                        <td><?= $utilisateur['profileUser']; ?></td>
                        <td>
                            <a href="infoutilisateur.php?id=<?= $utilisateur['IdUser']; ?>" class="btn btn-info btn-sm">Détails</a>
                            <a href="modifierutilisateur.php?id=<?= $utilisateur['IdUser']; ?>" class="btn btn-success btn-sm">Modifier</a>
                            <form action="code.php" method="POST" class="d-inline">
                                <button type="submit" name="supprimer_utilisateur" value="<?=$utilisateur['IdUser'];?>" class="btn btn-danger btn-sm">Supprimer</button>
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