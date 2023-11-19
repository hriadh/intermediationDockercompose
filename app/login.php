<?php
session_start();

include('header.php');
include('navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php include('message.php');?>

                <div class="card-body">
                    <div class="card-header">
                        <h4>Veuillez vous connecter</h4>
                    </div>
                    <div class="card-body">
                        <form action="codeconnexion.php" method="POST">
                            
                               <div class="form-group mb-3">
                                <input type="text" placeholder="Votre identifiant" name="id" class="form-control">
                                
                                </div>
                                <div class="form-group mb-3">
                                <input type="password" placeholder="Votre mot de passe" name="mdp" class="form-control">
                                
                                </div>
                                <div class="form-group mb-3">
                                <button type="submit" name="Connexion" class="btn btn-primary">Se connecter</button>
                            
                                </div>

                         </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php

include('footer.php');

?>