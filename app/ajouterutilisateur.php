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
                        <h4>Ajouter utilisateur 
                            <a href="espaceadmin.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Nom utilisateur</label>
                                <input type="text" name="nom" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Prénom utilisateur</label>
                                <input type="text" name="prenom" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mot de passe</label>
                                <input type="password" name="mdp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Adresse</label>
                                <input type="text" name="adresse" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Profil</label>
                                <label><input type="radio" name="profile" value="Client"> Client</label>
                                <label><input type="radio" name="profile" value="Fournisseur"> Fournisseur</label>
                                <label><input type="radio" name="profile" value="Admin"> Admin</label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="enregistrer_utilisateur" class="btn btn-primary">Enregistrer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
