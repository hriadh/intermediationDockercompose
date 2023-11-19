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
                        <h4>Veuillez vous inscrire</h4>
                    </div>
                    <div class="card-body">
                        <form action="codeisncription.php" method="POST">
                        <div class="form-group mb-3">
                            <input required type="text" placeholder="Votre nom" name="nom" class="form-control">
                            
                        </div>
                        <div class="form-group mb-3">
                            <input required type="text" placeholder="Votre prenom" name="prenom" class="form-control">
                            
                        </div>
                        <div class="form-group mb-3">
                            <input required type="email" placeholder="Votre Email" name="email" class="form-control">
                            
                        </div>
                        <div class="form-group mb-3">
                            <input required type="password" placeholder="Votre mot de passe" name="mdp" class="form-control">
                            
                        </div>
                        <div class="form-group mb-3">
                            <input required type="password" placeholder="Confirmer le mot de passe" name="cmdp" class="form-control">
                            
                        </div>
                        <div class="form-group mb-3">
                            <input required type="text" placeholder="Votre mobile" name="mobile" class="form-control">
                            
                        </div>
                        <div class="form-group mb-3">
                            <input required type="text" placeholder="Votre adresse postale" name="adresse" class="form-control">
                            
                        </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Choisissez votre profil</label>

                            <label><input required type="radio" name="profile" value="Client"> Client  </label>
                            <label><input required type="radio" name="profile" value="Fournisseur"> Fournisseur  </label>
                            
                        </div>

                        
                        <div class="form-group mb-3">
                            <button type="submit" name="inscription" class="btn btn-primary">S'inscrire</button>
                            
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