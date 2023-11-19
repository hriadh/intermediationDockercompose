<?php

$con = mysqli_connect("db","inter","password","intermediationphp");

if(!$con){
    die('Connexion échouée'. mysqli_connect_error());
}

?>
