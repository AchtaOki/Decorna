<?php
//include la page de connexion
include_once "con_dbb.php";
//verifier si une session existe
if(!isset($_SESSION)){
    // si non demarrer la session
    session_start();
}
//creer la session
if(!isset($_SESSION['panier'])){
    // s il n existe pas une session on cree une et on met un tableau a l interieur
    $_SESSION['panier'] = array();
}
// récuperation de l id dans le lien
if(isset($_GET['id'])){

    $id=$_GET['id'];
// verifier grace a l id si le produit existe dans la base de données
$produit = mysqli_query($con, "SELECT * FROM produits WHERE id =$id ");
if(empty(mysqli_fetch_assoc($produit))){
    //si ce produit n existe pas
    die("Ce produit n existe pas");
}
// ajouter le produit dans le panier (le tableau)
if(isset($_SESSION['panier'][$id])){
    // si le produit est deja dans le panier
    $_SESSION['panier'][$id]++; // reprente la quantité   
}else{
    //si non on ajoute le produit
    $_SESSION['panier'][$id]=1;   
}
//redirection vers la page index.php
header("Location:index.php");
}

?>
  <!--?php 
include_once('footer.php');
?-->