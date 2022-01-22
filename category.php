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
<<<<<<< HEAD
    <section class="category" id="caty1">

      <div class="cotoner-child" id="produit1">
        <button class="produit" onmouseover="afichage_over(0)" onmouseout="afichage_out(0)">
          <img src="./Image/tv/tv1.jpg" alt="tv">
          <br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="tv1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="tv1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>

      <div class="cotoner-child" id="produit2">
        <button class="produit" onmouseover="afichage_over(1)" onmouseout="afichage_out(1)">
          <img src="./Image/tv/tv2.jpg" alt="tv"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="tv2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="tv2-num">32</span> pieces</p>
        </button>

        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit3">
        <button class="produit" onmouseover="afichage_over(2)" onmouseout="afichage_out(2)">
          <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="tv3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="tv3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit4">
        <button class="produit" onmouseover="afichage_over(3)" onmouseout="afichage_out(3)">
          <img src="./Image/tv/tv2.jpg" alt="tv"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="tv4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="tv4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit5">
        <button class="produit" onmouseover="afichage_over(4)" onmouseout="afichage_out(4)">
          <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="tv5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="tv5-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
    </section>
    <br>
    <section class="category" id="caty2">
      <div class="cotoner-child" id="produit11">
        <button class="produit" onmouseover="afichage_over(5)" onmouseout="afichage_out(5)">
          <img src="./Image/seo/sh1.jpg" alt="sh"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit12">
        <button class="produit" onmouseover="afichage_over(6)" onmouseout="afichage_out(6)">
          <img src="./Image/seo/sh2.jpg" alt="sh"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh2-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit13">
        <button class="produit" onmouseover="afichage_over(7)" onmouseout="afichage_out(7)">
          <img src="./Image/seo/sh1.jpg" alt="sh"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit14">
        <button class="produit" onmouseover="afichage_over(8)" onmouseout="afichage_out(8)">
          <img src="./Image/seo/sh2.jpg" alt="sh"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit15">
        <button class="produit" onmouseover="afichage_over(9)" onmouseout="afichage_out(9)">
          <img src="./Image/seo/sh1.jpg" alt="sh"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh5-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
    </section>
    <br>
    <section class="category" id="caty3">
      <div class="cotoner-child" id="produit21">
        <button class="produit" onmouseover="afichage_over(10)" onmouseout="afichage_out(10)">
          <img src="./Image/wash/wc1.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="wc1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="wc1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit22">
        <button class="produit" onmouseover="afichage_over(12)" onmouseout="afichage_out(12)">
          <img src="./Image/wash/wc2.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="wc2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="wc2-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit23">
        <button class="produit" onmouseover="afichage_over(13)" onmouseout="afichage_out(13)">
          <img src="./Image/wash/wc3.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="wc3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="wc3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit24">
        <button class="produit" onmouseover="afichage_over(14)" onmouseout="afichage_out(14)">
          <img src="./Image/wash/wc2.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="wc4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="wc4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit25">
        <button class="produit" onmouseover="afichage_over(15)" onmouseout="afichage_out(15)">
          <img src="./Image/wash/wc3.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="wc5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="wc5-num">32</span> pieces</p>
        </button>
        <div class="afichage"></div>

    </section><br>
    <section class="category" id="caty4">
      <div class="cotoner-child" id="produit31">
        <button class="produit" onmouseover="afichage_over(16)" onmouseout="afichage_out(16)">
          <img src="./Image/forno/oven1.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit32">
        <button class="produit" onmouseover="afichage_over(17)" onmouseout="afichage_out(17)">
          <img src="./Image/forno/oven2.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh2-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit33">
        <button class="produit" onmouseover="afichage_over(18)" onmouseout="afichage_out(18)">
          <img src="./Image/forno/oven3.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit34">
        <button class="produit" onmouseover="afichage_over(19)" onmouseout="afichage_out(19)">
          <img src="./Image/forno/oven1.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit35">
        <button class="produit" onmouseover="afichage_over(20)" onmouseout="afichage_out(20)">
          <img src="./Image/forno/oven2.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="sh5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="sh5-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
    </section><br>
    <section class="category" id="caty5">
      <div class="cotoner-child" id="produit41">
        <button class="produit" onmouseover="afichage_over(21)" onmouseout="afichage_out(21)">
          <img src="./Image/refrigerator/fr1.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit42">
        <button class="produit" onmouseover="afichage_over(22)" onmouseout="afichage_out(22)">
          <img src="./Image/refrigerator/fr2.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr2-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit43">
        <button class="produit" onmouseover="afichage_over(23)" onmouseout="afichage_out(23)">
          <img src="./Image/refrigerator/fr3.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit44">
        <button class="produit" onmouseover="afichage_over(24)" onmouseout="afichage_out(24)">
          <img src="./Image/refrigerator/fr6.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit45">
        <button class="produit" onmouseover="afichage_over(25)" onmouseout="afichage_out(25)">
          <img src="./Image/refrigerator/fr7.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr5-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
    </section>
    <br>
    <section class="category" id="caty6">

      <div class="cotoner-child" id="produit45">
        <button class="produit" onmouseover="afichage_over(26)" onmouseout="afichage_out(26)">
          <img src="./Image/ice/ice-fr1.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr-ice1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr-ice1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit52">
        <button class="produit" onmouseover="afichage_over(27)" onmouseout="afichage_out(27)">
          <img src="./Image/ice/ice-fr2.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr-ice2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr-ice2-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit53">
        <button class="produit" onmouseover="afichage_over(28)" onmouseout="afichage_out(28)">
          <img src="./Image/ice/ice-fr3.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr-ice3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr-ice3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit54">
        <button class="produit" onmouseover="afichage_over(29)" onmouseout="afichage_out(29)">
          <img src="./Image/ice/ice-fr4.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr-ice4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr-ice4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit55">
        <button class="produit" onmouseover="afichage_over(30)" onmouseout="afichage_out(30)">
          <img src="./Image/ice/ice-fr5.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="fr-ice5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="fr-ice5-num">32</span> pieces</p>
        </button>

        <div class="afichage">

        </div>

      </div>
    </section>
    <br>

    <section class="category" id="caty7">
      <div class="cotoner-child" id="produit61">
        <button class="produit" onmouseover="afichage_over(31)" onmouseout="afichage_out(31)">
          <img src="./Image/cafe/c1.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="cafe1-price"> 10 000.00</span> DH</h3><br>
          <p><span id="cafe1-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit62">
        <button class="produit" onmouseover="afichage_over(32)" onmouseout="afichage_out(32)">
          <img src="./Image/cafe/c2.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="cafe2-price"> 10 000.00</span> DH</h3><br>
          <p><span id="cafe2-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit63">
        <button class="produit" onmouseover="afichage_over(33)" onmouseout="afichage_out(33)">
          <img src="./Image/cafe/c3.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="cafe3-price"> 10 000.00</span> DH</h3><br>
          <p><span id="cafe3-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit64">
        <button class="produit" onmouseover="afichage_over(34)" onmouseout="afichage_out(34)">
          <img src="./Image/cafe/c4.jpg" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="cafe4-price"> 10 000.00</span> DH</h3><br>
          <p><span id="cafe4-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>
      </div>
      <div class="cotoner-child" id="produit65">
        <button class="produit" onmouseover="afichage_over(35)" onmouseout="afichage_out(35)">
          <img src="./Image/cafe/c1.png" alt="image"><br><br>
          <p>Factory Direst Sales Aucma 536L ...</p><br>
          <h3><span id="cafe5-price"> 10 000.00</span> DH</h3><br>
          <p><span id="cafe5-num">32</span> pieces</p>
        </button>
        <div class="afichage">

        </div>

      </div>
    </section><br>
=======
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



>>>>>>> main






  </main>
<<<<<<< HEAD
  <div id="form" onchange="Ajouter_prouduit()">
    <!-- <section class="contoner-produit"  >
  <div id="ajouterProduit">
  <button id="upload"><img src="./image/photo.png" alt="Save Image"></button>
  <table class="config">
    
    <tr>
      <th>Category</th>
      <td><input class="input-parts" type="text" name="Category" id="category"></td>
    </tr>
    <tr>
      <th>Marque</th>
      <td><input class="input-parts" type="text" name="Marque" id="marque"></td>
    </tr>
    <tr>
      <th>Color</th>
      <td><input class="input-parts" type="color" name="color" id="color" value="#ffffff"></td>
    </tr>
    <tr>
      <th>Quantity</th>
      <td><input class="input-parts" type="number" name="Quantity" id="quantity" min="1"></td>
    </tr>
    <tr>
      <th>Price</th>
      <td><input class="input-parts" type="number" name="Price" id="price" min="1"></td>
    </tr>
  </table>
  <div class="save">
      <button id="retour" >Retour</button>
      <button id="ajouter" >Enregistrer</button>
  </div>
  </div>
</section> -->
  </div>
  <!-- javascript code -->

</body>
<script>
  function responsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "container") {
      x.className += " topnav";
    } else {
      x.className = "container";

    }
  }

  function Ajouter_prouduit() {
    let form = getElementById("form");
    form = `<section class="contoner-produit"  id="form" onchange="Ajouter_prouduit()">
  <div id="ajouterProduit">
  <button id="upload"><img src="./image/photo.png" alt="Save Image"></button>
  <table class="config">
    
    <tr>
      <th>Category</th>
      <td><input class="input-parts" type="text" name="Category" id="category"></td>
    </tr>
    <tr>
      <th>Marque</th>
      <td><input class="input-parts" type="text" name="Marque" id="marque"></td>
    </tr>
    <tr>
      <th>Color</th>
      <td><input class="input-parts" type="color" name="color" id="color" value="#ffffff"></td>
    </tr>
    <tr>
      <th>Quantity</th>
      <td><input class="input-parts" type="number" name="Quantity" id="quantity" min="1"></td>
    </tr>
    <tr>
      <th>Price</th>
      <td><input class="input-parts" type="number" name="Price" id="price" min="1"></td>
    </tr>
  </table>
  <div class="save">
      <button id="retour" >Retour</button>
      <button id="ajouter" >Enregistrer</button>
  </div>
  </div>
    </section>`
    document.getElementById('form').innerHTML = form;
  }
 

  function afichage_over(i) {
    let Frame = document.getElementsByClassName('afichage');
    // for(let i=0;i<Frame.length;i++){
    Frame[i].innerHTML = ` <div class="frame">
        <button id="Modifier" >Modifier</button>
        <button id="Supprimer" >Supprimer</button>
        </div>`;
    
  }
  function afichage_out(i) {
    let Frame = document.getElementsByClassName('frame');
    Frame[i].innerHTML = ` <div class="afichage"> </div>`;
  }
 
=======
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


>>>>>>> main
</script>

</html>