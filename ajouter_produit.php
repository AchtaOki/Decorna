<?php 
require_once('header.php');
?>

<div class="center">
    <h1>Admin</h1><br><br>


<?php 
if(isset($_GET['action'])){
    if($_GET['action']== 'add_product'){
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
    $save_article = $con->prepare('INSERT INTO produits(nom,prix,img) VALUES(?,?,?)');
    $save_article->execute(array($nom,$prix,$name_file));
    echo"opération reussie";

    }
    }}

        ?>
<h3> Ajouter un produit</h3><br>
        <form method="POST" action="" enctype="multipart/form-data">
           <input type="text" name="nom" placeholder="entrer le nom" required="" class="form form-control"><br><br>
           <input type="text" name='prix' class="form form-control" placeholder="entrer le prix" ><br>
           <input type="file" name="fichier"><br><br>
           <input type="submit" name="submit"class="btn btn-primary"> 
         </form>
        
</div>
<?php 
include_once('footer.php');
?>