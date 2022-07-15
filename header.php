<!DOCTYPE html>
<html>
    <head>
    <title>Entete du site</title>
        <meta charset="utf-8">
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
 crossorigin="anonymous">
<style type="text/css">

body{
    width: 100%;
    height: 100vh;
    background: #eee;
}
.center{
    width: 60%;
    margin-right: auto;
    margin-left: auto;
    background: white;
    min-height: 700px;
    padding: 30px 30px;
}

</style>

    </head>
    <body>
   
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="project_images/logo.png" width="100px" height="90px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:white" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="admin.php?action=add_article">Ajouter un article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="admin.php?action=modif_suppr">Modifier ou supprimer</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" style="color:white" href="admin.php?action=add_product">Ajouter un produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" style="color:white" href="admin.php?action=modif_suppr">Admin</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="color:white">Search</button>
      </form>
    </div>
  </div>
</nav>