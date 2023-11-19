<?php

  $host ='localhost';
  $dbname ='intermediationphp';
  $username ='root';
  $password = '';
  try{
    $con = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
     }
  catch (PDOException $e){
  die('Erreur:' . $e->getMessage());
  }
?>