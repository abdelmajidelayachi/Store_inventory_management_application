<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Accueil</title>
  <link rel="stylesheet" href="style/category.css">
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


      <div>
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
      </div>
      <div class="container topnav" id="myTopnav">
        <div class="alarm">
          <i class="material-icons ">notifications_active</i>
        </div>
        <div class="profil-pic">
          <img src="Image/profile-pic.jpg" alt="profile">
        </div>
        <div class="name">
          <p>EL Ayachi Abdelmajid</p>
          <p>Employé</p>
        </div>
        <div class="nav-container mobile">
          <ul>
            <li><a href="index.php">Accueil</a></li>
            <li class="current"><a href="category.php">catégorie</a></li>
            <li><a href="#">Indisponible produit</a></li>
            <li><a href="report.php">Rapport</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="nav-container disktop">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li class="current"><a href="#">Catégorie</a></li>
        <li><a href="#">Indisponible produit</a></li>
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
    <div class="category" id="caty1">
      <div class="produit" id="produit1">
        <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit2">
        <img src="./Image/tv/tv2.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit3">
        <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit4">
        <img src="./Image/tv/tv2.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit5">
        <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv5-num">32</span> pieces</p>
      </div>
    </div>
    <br><br>
    <div class="category" id="caty1">
      <div class="produit" id="produit1">
        <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit2">
        <img src="./Image/tv/tv2.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit3">
        <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit4">
        <img src="./Image/tv/tv2.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit5">
        <img src="./Image/tv/tv1.jpg" alt="tv"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="tv5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="tv5-num">32</span> pieces</p>
      </div>
    </div>
²





  </main>

  <!-- javascript code -->
  <script>
    function responsive() {
      var x = document.getElementById("myTopnav");
      if (x.className === "container") {
        x.className += " topnav";
      } else {
        x.className = "container";

      }
    }
  </script>
</body>

</html>