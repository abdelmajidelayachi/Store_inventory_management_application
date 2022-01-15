<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Accueil</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
</style>
  <link rel="stylesheet" href='style/style.css'>
</head>

<body class="sign-mode">
  <!-- header -->
  <header>
    <div class="header-bar">
    <div class="container_mobile">
        <div class="logo">
          <img src="./Image/logo-ic.svg" alt="">
        </div>
        <div class="three_bars">
          <a href="javascript:void(0);" class="icon-menu" onclick="responsive()">
            <i class="fa fa-bars fa-5x"></i>
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
            <li class="current"><a href="#">Accueil</a></li>
            <li><a href="category.php">Catégorie</a></li>
            <li><a href="#">Ajouter des produits</a></li>
            <li><a href="report.php">Rapport</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="nav-container disktop">
      <ul>
        <li class="current"><a href="#">Accueil</a></li>
        <li><a href="category.php">catégorie</a></li>
        <li><a href="#">Indisponible produit</a></li>
        <li><a href="report.php">Rapport</a></li>
      </ul>
    </div>
  </header>
  <main>
  <!-- write code here   -->
  <div class="chiffre">
      <div class="gain-jour">
        <h3>Les gains du jour</h3>
        <p>2000,500 DH</p>
      </div>
      <div class="gain-mois">
        <h3>Return de mois</h3>
        <p>12.000,300 DH</p>
      </div>
      <div class="total-gain">
        <h3>Total Sales de mois</h3>
        <p>60.980,119 DH</p>
      </div>
    </div>
  
   <section class="category-box">
     <div class="box">
       <img src="image/img-33.png" alt="Machine a laver" id="box-img">
      
         <p>Machine a laver</p>
      
     </div>
     <div  class="box">
      <img src="image/img-38.webp" alt="Télévision" id="box-img">
   <p>Télévision</p></div>
     <div  class="box"><img src="image/img-32.jpg" alt="Machine a coudre" id="box-img">
   <p>Machine a coudre</p>
 </div>
     <div  class="box">
       <img src="image/img-1.png" alt="Four electrique" id="box-img">
       <p>Four electrique</p>
     </div>
     <div  class="box">
       <img src="image/img-11.jpg" alt="Machine à café" id="box-img">
       <p>Machine à café</p>
     </div>
     <div  class="box">
       <img src="image/img-35.png" alt="Réfrigérateur" id="box-img">
       <p>Réfrigérateur</p>
     </div>
     <div  class="box">
       <img src="image/img-13.jpg" alt="Inspirateur" id="box-img">
       <p>Inspirateur </p>
     </div>
     <div  class="box">
       <img src="image/img-30.jpg" alt="Machine a vaisselle" id="box-img">
       <p>Machine a vaisselle</p>
     </div>
     
   </section>

  <div  class="sign-in" id="compte">
      <form action="sign in" method="get" id="id00">
        <button class="sign sign-in-btn">Sign in</button>
        <button class="sign sign-up-btn">sign up</button>
        <label for="usrname">
          username
        </label>
        <input type="text" name="cin" id="cin" placeholder="Enter votre Cin?">
        <label for="Cin">
          CIN
        </label>
        <input type="text" name="username" id="usrname" placeholder="Enter votre username?">
        <label for="usrname">
          Mot de passe
        </label>
        <input type="text" name="username" id="usrname" placeholder="Enter votre username?">
      </form>
  </div>


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