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
        <li><a href="#">Ajouter des produits</a></li>
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
        <button onclick="">
        <img src="./Image/tv/tv1.jpg" alt="tv" >
        </button><br><br>
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
    <br>
    <div class="category" id="caty2">
      <div class="produit" id="produit11">
        <img src="./Image/seo/sh1.jpg" alt="sh"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit12">
        <img src="./Image/seo/sh2.jpg" alt="sh"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit13">
        <img src="./Image/seo/sh1.jpg" alt="sh"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit14">
        <img src="./Image/seo/sh2.jpg" alt="sh"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit15">
        <img src="./Image/seo/sh1.jpg" alt="sh"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh5-num">32</span> pieces</p>
      </div>
    </div>
    <br>
    <div class="category" id="caty3">
      <div class="produit" id="produit21">
        <img src="./Image/wash/wc1.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="wc1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="wc1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit22">
        <img src="./Image/wash/wc2.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="wc2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="wc2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit23">
        <img src="./Image/wash/wc3.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="wc3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="wc3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit24">
        <img src="./Image/wash/wc2.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="wc4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="wc4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit25">
        <img src="./Image/wash/wc3.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="wc5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="wc5-num">32</span> pieces</p>
      </div>
    </div><br>
    <div class="category" id="caty4">
      <div class="produit" id="produit31">
        <img src="./Image/forno/oven1.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit32">
        <img src="./Image/forno/oven2.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit33">
        <img src="./Image/forno/oven3.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit34">
        <img src="./Image/forno/oven1.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit35">
        <img src="./Image/forno/oven2.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="sh5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="sh5-num">32</span> pieces</p>
      </div>
    </div><br>
    <div class="category" id="caty5">
      <div class="produit" id="produit41">
        <img src="./Image/refrigerator/fr1.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit42">
        <img src="./Image/refrigerator/fr2.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit43">
        <img src="./Image/refrigerator/fr3.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit44">
        <img src="./Image/refrigerator/fr6.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit45">
        <img src="./Image/refrigerator/fr7.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr5-num">32</span> pieces</p>
      </div>
    </div><br>
    <div class="category" id="caty6">
      <div class="produit" id="produit51">
        <img src="./Image/ice/ice-fr1.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr-ice1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr-ice1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit52">
        <img src="./Image/ice/ice-fr2.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr-ice2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr-ice2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit53">
        <img src="./Image/ice/ice-fr3.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr-ice3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr-ice3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit54">
        <img src="./Image/ice/ice-fr4.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr-ice4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr-ice4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit55">
        <img src="./Image/ice/ice-fr5.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="fr-ice5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="fr-ice5-num">32</span> pieces</p>
      </div>
    </div><br>
    </div><br>
    <div class="category" id="caty7">
      <div class="produit" id="produit61">
        <img src="./Image/cafe/c1.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="cafe1-price"> 10 000.00</span> DH</h3><br>
        <p><span id="cafe1-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit62">
        <img src="./Image/cafe/c2.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="cafe2-price"> 10 000.00</span> DH</h3><br>
        <p><span id="cafe2-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit63">
        <img src="./Image/cafe/c3.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="cafe3-price"> 10 000.00</span> DH</h3><br>
        <p><span id="cafe3-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit64">
        <img src="./Image/cafe/c4.jpg" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="cafe4-price"> 10 000.00</span> DH</h3><br>
        <p><span id="cafe4-num">32</span> pieces</p>
      </div>
      <div class="produit" id="produit65">
        <img src="./Image/cafe/c1.png" alt="image"><br><br>
        <p>Factory Direst Sales Aucma 536L ...</p><br>
        <h3><span id="cafe5-price"> 10 000.00</span> DH</h3><br>
        <p><span id="cafe5-num">32</span> pieces</p>
      </div>
    </div><br>

    




  </main>
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
    function Ajouter_prouduit(){
      let form=getElementById("form");
      form=`<section class="contoner-produit"  id="form" onchange="Ajouter_prouduit()">
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
document.getElementById('form').innerHTML =form;
    }
  </script>
</html>