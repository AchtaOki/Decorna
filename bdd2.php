<?php

try{
    $con= new PDO('mysql:host=localhost;dbname=panier;charset=utf8','root','root');   
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    return $con;

}catch(PDOException $e){
    echo "erreur de la connexion a la bd".$e->getMessage();
}


?>