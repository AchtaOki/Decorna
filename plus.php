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

.articles{
    display: flex;
    flex-wrap: wrap;
    align-content: space-around;
  
}
.center{
    width: 70%;
    margin-right: auto;
    margin-left: auto;
   
}
.card{
    margin-right: 50px;
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
.card:hover{
    transform: scale(1.1);}


</style>

</head>



<div class="center"><br><br><br>
    <h1>Details</h1><br><br>
    <div class="articles">

    <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="project_images/<?php echo $_GET['nom_img'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $_GET['titre'] ?></h5>
        <p class="card-text"><?php echo $_GET['contenu'] ?></p>
        <button  type="submit"><a href="index.php"> Retour</a></button>
      </div>
    </div>
  </div>
</div>

  

    </div>
</div>
