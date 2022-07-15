<?php
session_start();

require_once('header.php');

include_once "con_dbb.php";



// Supprimer les produits
// si la variable del existe

if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    //suppression
    unset($_SESSION['panier'][$id_del]);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Panier</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
<body class="panier"style="background:white;">
    <a href="index.php" class="link">Boutique</a>
    <section>
<table>
<tr>
    <th></th>
    <th>Nom</th>
    <th>Prix</th>
    <th>Quantité</th>
    <th>Action </th>
</tr>
<?php
$total=0;
// liste des produits
//recuperer les cles du tableau session
$ids = array_keys($_SESSION['panier']);
// s il n y a aucune clé dans le tableau
if(empty($ids)){
    echo "votre panier est vide";
}else{
    //si oui
$products = mysqli_query($con, "SELECT * FROM produits WHERE id IN (".implode(',', $ids).")");

// liste des produits avec une boucle foreach

foreach($products as $product):
    //calculer le total (prix unitaire * Quantité)
    // et additionner chaque resultat à chaque tour de boucle

    $total = $total + $product['prix'] * $_SESSION['panier'][$product['id']];

?>
<tr>
    <td><img src="project_images/<?=$product['img']?>"></td>
    <td><?=$product['nom']?></td>
    <td><?=$product['prix']?>€</td>
    <td><?=$_SESSION['panier'][$product['id']] //Quantité ?></td>
    <td><a href="panier.php?del=<?=$product['id']?>"><img src="project_images/delete.jpg"></a></td>

</tr>

<?php endforeach; } ?>

<tr class="total">
    <th>Total: <?=$total?>€</th>
</tr>


</table>



    </section>

    <?php 
include_once('footer.php');
?>
    
    
</body>
</html>