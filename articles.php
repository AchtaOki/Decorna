
<!DOCTYPE html>
<html>
<head>
<title>Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
 crossorigin="anonymous">
 <!--link rel="stylesheet" href="style.css"-->
 <style>


.articles{
 
    margin: 100px auto;
    margin-top: 0px;
    width: 70%;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(170px,1fr));
    grid-gap:25px;

}
.card{
    box-shadow: 0 0 5px rgba(0,0,0,0.3);
  
     border-radius:6px;
    
   
     transition: 0.5s;
     
  
    object-fit: cover;

    
   
    height: fit-content;
    text-align: left;
}
.card:hover{
    transform: scale(1.1);}
</style>

</head>
<body>
<h3 style="text-align:left; padding:16px;">Nos articles</h3>

  
<div class="articles">
        
            <?php
            require_once("bdd2.php");
            $req=$con->prepare('SELECT * FROM articles');
            $req->execute();
            while ($reponse=$req->fetch(PDO::FETCH_OBJ)){?>

       

            <div class="card">
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






    
    <!--?php 
include_once('footer.php');
?-->

</body>
</html>