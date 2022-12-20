<?php
session_start();
?>
<?php 
require_once('header.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Boutique</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
 crossorigin="anonymous">
 <style type="text/css">




</style>

</head>

    <body>
       <!-- afficher le nombre de produit dans le panier-->
<a href="panier.php" class="link">Panier<span><?=array_sum($_SESSION['panier'])?></span></a>
<h1 style=" text-align:center; color:#37a6ff; margin-bottom:16px;" >Bienvenue dans la boutique en ligne de Decorna</h1><br>
<h3 style="text-align:left; padding:16px;margin-bottom:-70px;">Nos produits</h3>
<section class="liste_produit">

<?php 
// include la page de connexion

include_once "con_dbb.php";
// afficher liste des produits
$req = mysqli_query($con,"SELECT * FROM produits");
while($row=mysqli_fetch_assoc($req)){
    ?>

<form action="" class="produit">
<div class="image_product">
    <img src="project_images/<?=$row['img']?>"  >
</div>
<div class="content">
<h4 class="name"><?=$row['nom']?></h4>
<h2 class="prix"><?=$row['prix']?> €</h2>
<a href="ajouter_panier.php?id=<?=$row['id']?>" class="id_produit">Ajouter  au Panier</a>

</div>
    </form>

<?php } ?>


</section>
<section >
    <?php 
    include_once('articles.php');
    ?>
</section>
  <!--?php 
include_once('footer.php');
?-->
        
    </body>
</html>