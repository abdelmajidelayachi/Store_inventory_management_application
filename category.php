<?php

require_once 'page.php';

$stmt = $pdo->query('SELECT*FROM produit');


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Category</title>
  <link rel="stylesheet" href="style/category.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
  </style>
</head>

<body>
  <!-- header -->
  <header>
    <div class="header-bar">
      <div class="container_mobile">
        <div class="logo">
          <img src="./Image/logo-ic.svg" alt="">
        </div>
        <div class="three_bars">
          <a href="javascript:void(0);" class="icon-menu" onclick="responsive()">
            <i class="fa fa-bars fa-2x"></i>
          </a>
        </div>
      </div>

      <div class="search">
        <form action="./" method="get">
          <div class="searchbar">
            <input type="text" class="searchbar__input" name="q" placeholder="Cherche produit">
            <button type="submit" class="searchbar__button">
              <i class="material-icons">search</i>
            </button>
          </div>
        </form>
      </div>

      <div class="container topnav" id="myTopnav">

        <div class="profil-pic">
          <img src="Image/profile-pic.jpg" alt="profile">
        </div>
        <div class="name">
          <p>EL Ayachi Abdelmajid</p>
          <p class="user">Employé</p>
        </div>
        <div class="nav-container mobile">
          <ul>
            <li><a href="index.php">Accueil</a></li>
            <li class="current.php"><a href="category.php">catégorie</a></li>
            <li><a href="Ajouter.php">Ajouter des produits</a></li>
            <li><a href="report.php">Rapport</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="nav-container disktop">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li class="current.php"><a href="category.php">Catégorie</a></li>
        <li><a href="Ajouter.php">Ajouter des produits</a></li>
        <li><a href="report.php">Rapport</a></li>
      </ul>
    </div>
  </header>
  <main>
    <!-- write code here   -->
    <div class="bar-container">
      <ul>
        <li class="current-cat"><a href="#">Toutes</a></li>
        <li><a href="#">Machine a laver</a></li>
        <li><a href="#">Télévision</a></li>
        <li><a href="#">Machine a coudre</a></li>
        <li><a href="#">Machine a vaisselle</a></li>
        <li><a href="#">Four electrique</a></li>
        <li><a href="#">Machine à café</a></li>
        <li><a href="#">Réfrigérateur</a></li>
        <li><a href="#">Inspirateur</a></li>
      </ul>
    </div>
    <?php


$row =  $stmt->fetch('Category');
$Category=$row;

if($Category==$row->Category){
  


    ?>
    <section class="category" id="caty1" id="<?php echo $row->Category; ?>">
      <?php
      while ($row =  $stmt->fetch()) {
      ?>
        <div class="cotoner-child" id="produit1">
          <button class="produit" onmouseover="afichage_over(this,<?php echo $row->Id; ?>)" onmouseout="afichage_out(this,<?php echo $row->Id; ?>)">
            <img src="./uploads/<?php echo $row->images; ?>" alt="tv">
            <br><br>
            <p><?php echo $row->Marque; ?></p><br>
            <h3><span id="tv1-price"> <?php echo $row->Prix; ?></span> DH</h3><br>
            <p><span id="tv1-num"><?php echo $row->Quantity; ?></span> pieces</p>
          </button>
          <?php  ?>
          <div class="afichage ident frame">
            <button id="Modifier" onclick="Ajouter_prouduit()">Modifier</button>
            <button id="Supprimer">Supprimer</button>
          </div>
        </div>
      <?php }} ?>

    </section>

    <br>
    <?php  ?>









  </main>
  <div id="form">
    <section class="contoner-produit heiden" id="sect-01">
      <div id="ajouterProduit">

        <form action="" class="config" method="post" action="page.php">

          <div class="cotoner-child">
            <label>Image :</label>
            <input id="Image" class="input-parts" name="images" type="file" placeholder="./image/photo.png" width="48" height="48">
          </div>

          <div class="cotoner-child">
            <label>Category :</label>
            <input class="input-parts" type="text" name="category" id="category">
          </div>

          <div class="cotoner-child">
            <label>Marque :</label>
            <input class="input-parts" type="text" name="marque" id="marque">
          </div>

          <div class="cotoner-child">
            <label>Color :</label>
            <input class="input-parts" type="text" name="color" id="color">
          </div>

          <div class="cotoner-child">
            <label>Quantity :</label>
            <input class="input-parts" type="number" name="quantity" id="quantity" min="1">
          </div>

          <div class="cotoner-child">
            <label>Prix :</label>
            <input class="input-parts" type="number" name="prix" id="prix" min="1">
          </div>

        </form>
        <div class="save">
          <button id="retour" onclick="Ajouter_prouduit()">Retour</button>
          <button id="ajouter">Enregistrer</button>
        </div>
      </div>
    </section>
  </div>
  <!-- javascript code -->

</body>
<script type="text/javaScript" src="js.js">


</script>

</html>