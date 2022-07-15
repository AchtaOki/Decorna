<?php
include_once('header.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
 crossorigin="anonymous">
 <!--link rel="stylesheet" href="style.css"-->
 <style type="text/css">
.center{
    
    margin-right: auto;
    margin-left: auto;
    margin: 100px auto;
    position: relative;
    width: 70%;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(170px,1fr));
    grid-gap:25px;
   
}
.all_articles{
  
    display: flex;
    flex-wrap: wrap;
    align-content: space-around;

}
.card:hover{
    transform: scale(1.1);}
.card{
     box-shadow: 0 0 5px rgba(0,0,0,0.3);
     border-radius:6px;
     overflow: hidden;
     transition: 0.5s;
     height: 200px;
    width: 100%;
    object-fit: cover;

    margin-top: 0px;
    margin-bottom:10px;
    height: fit-content;
    text-align: left;
    
   

    
    
}

</style>

    </head>
<body>
<h3 style="text-align:left">Nos articles</h3>
    <div class="center">
  
<div class="all_articles">
    <?php
    require_once("bdd2.php");
    $req=$con->prepare('SELECT * FROM articles');
    $req->execute();
    while ($reponse=$req->fetch(PDO::FETCH_OBJ)){?>

<div class="card" style="width: 18rem;">
  <img src="project_images/<?php echo $reponse->nom_img ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $reponse->titre; ?></h5>
    <p class="card-text"><?php echo substr($reponse->contenu , 0,100); ?></p>
    <a href="plus.php?titre=<?php echo $reponse->titre; ?>&contenu=<?php echo 
    $reponse->contenu ?>&nom_img=<?php echo $reponse->nom_img ?> " class="btn btn-primary">Plus</a>
  </div>
</div>
   <?php }
    
    ?>







</div>
    </div>
    
    <?php 
include_once('footer.php');
?>

</body>
</html>