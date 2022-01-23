<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/category.css">
    <title>Document</title>
</head>
<body>
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
</body>
</html>