<?php 
require_once('header.php');
?>

<div class="center">
    <h1>Gestion des articles</h1><br><br>


<?php 
if(isset($_GET['action'])){
    if($_GET['action']== 'add_article'){
        require_once("bdd2.php");

if(isset($_POST['submit'])){

    extract($_POST);
    //print_r($_FILES['fichier']);
    $content_dir = 'project_images/';
    $tmp_file = $_FILES['fichier']['tmp_name'];
    if(!is_uploaded_file($tmp_file)){
        exit('le fichier est introuvable');
    }
    $type_file = $_FILES['fichier']['type'];
    if (!strstr($type_file,'jpeg')&& !strstr($type_file,'png')){
        exit("ce fichier n est pas une image");
    }
$name_file = time().'.jpg';
if(!move_uploaded_file($tmp_file,$content_dir.$name_file)){
    exit('impossible de copier le fichier');
}
$save_article = $con->prepare('INSERT INTO articles(titre,contenu,nom_img) VALUES(?,?,?)');
$save_article->execute(array($titre,$contenu,$name_file));
echo"opération reussie";

}

        ?>
<h3> Ajouter un article</h3><br>
        <form method="POST" action="" enctype="multipart/form-data">
           <input type="text" name="titre" placeholder="entrer le titre" required="" class="form form-control"><br><br>
           <textarea name="contenu" placeholder="entrer le contenu de l'article" class="form form-control"></textarea><br>
           <input type="file" name="fichier"><br><br>
           <input type="submit" name="submit"class="btn btn-primary"> 
         </form>
         <?php
    }elseif ($_GET['action'] == 'modif_suppr') {
        require_once('bdd2.php');
       $req_all_article = $con->prepare('SELECT *FROM articles');
       $req_all_article->execute();
?><table style="width:100%"><?php
       while ($reponse= $req_all_article->fetch(PDO::FETCH_OBJ)){
           ?>
           
    <tr><td><?php echo $reponse->titre ?></td>
        <td><a href="?action=modifier&id=<?php echo $reponse->id ?>">Modifier</a></td>
        <td><a href="?action=supprimer&id=<?php echo $reponse->id ?>">Supprimer</a></td>
    </tr>
        
   <?php        
       }
       ?> </table><?php
    }elseif ($_GET['action'] == 'supprimer'){
        require_once('bdd2.php');
        $supprimer_article = $con->prepare('DELETE FROM articles WHERE id=?');
        $supprimer_article->execute(array($_GET['id']));
        header('location:admin.php?action=modif_suppr');
    }elseif($_GET['action'] == 'modifier'){
        require_once('bdd2.php');
        if (isset($_POST['submit'])){
            extract($_POST);
            $article_update = $con->prepare('UPDATE articles set titre=? , contenu=? WHERE id=?');
            $article_update->execute(array($titre,$contenu,$_GET['id']));
        }
$req_valeur = $con->prepare('SELECT *FROM articles WHERE id=?');
$req_valeur->execute(array($_GET['id']));
$reponses = $req_valeur->fetch(PDO::FETCH_OBJ);
        ?>
<form method="POST" action="" enctype="multipart/form-data">
           <input type="text" name="titre" value="<?php echo $reponses->titre ?>" required="" class="form form-control"><br><br>
           <textarea name="contenu" class="form form-control"><?php echo $reponses->contenu ?></textarea><br>

           <input type="submit" name="submit"class="btn btn-primary"> 
         </form>
        <?php
    }?>
    <?php
} elseif ($_GET['action'] == 'modif_suppr') {
     require_once('bdd2.php');
     $req_all_products= $con->prepare('SELECT *FROM produits');
     $req_all_products->execute();
?><table style="width:100%"><?php
    while ($reponse= $req_all_products->fetch(PDO::FETCH_OBJ)){
        ?>
        
 <tr><td><?php echo $reponse->titre ?></td>
     <td><a href="?action=modifier&id=<?php echo $reponse->id ?>">Modifier</a></td>
     <td><a href="?action=supprimer&id=<?php echo $reponse->id ?>">Supprimer</a></td>
 </tr>
     
<?php        
    }
    ?> </table><?php
 }elseif ($_GET['action'] == 'supprimer'){
     require_once('bdd2.php');
     $supprimer_produit = $con->prepare('DELETE FROM produits WHERE id=?');
     $supprimer_supprimer->execute(array($_GET['id']));
     header('location:admin.php?action=modif_suppr');
 }elseif($_GET['action'] == 'modifier'){
     require_once('bdd2.php');
     if (isset($_POST['submit'])){
         extract($_POST);
         $produit_update = $con->prepare('UPDATE produits set nom=? , prix=? WHERE id=?');
         $produit_update->execute(array($nom,$prix,$_GET['id']));
     }
$req_valeur = $con->prepare('SELECT *FROM produits WHERE id=?');
$req_valeur->execute(array($_GET['id']));
$reponses = $req_valeur->fetch(PDO::FETCH_OBJ);
?>
<form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="nom" value="<?php echo $reponses->titre ?>" required="" class="form form-control"><br><br>
        <imput name="prix" class="form form-control"><?php echo $reponses->contenu ?></input><br>

        <input type="submit" name="submit"class="btn btn-primary"> 
      </form>
     <?php
 }





?>
</div>











}



?>
</div>

<?php 
require_once('header.php');
?>



<?php

require_once('footer.php');

?>