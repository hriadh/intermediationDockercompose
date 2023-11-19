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
                        <h4>Ajouter service 
                            <a href="espacefournisseur.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codeservice.php" method="POST">

                            <div class="mb-3">
                                <label>Nom service</label>
                                <input type="text" name="nomservice" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="descriptionService" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cout</label>
                                <input type="text" name="coutService" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="ajouter_service" class="btn btn-primary">Enregistrer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
