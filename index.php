<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Accueil</title>
  <link rel="stylesheet" href="style/style.css">
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
            <li class="current"><a href="#">Accueil</a></li>
            <li><a href="category.php">catégorie</a></li>
            <li><a href="#">Indisponible produit</a></li>
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
  <div class="sign-in" id="compte">
      <form action="sign in" method="get" id="id00">
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