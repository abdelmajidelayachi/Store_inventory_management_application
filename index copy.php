<?php
//  include 'sql/connexion.php';
$host="localhost";
$CIN="root";
$PASSWORD="";
$db="management_of_magasin";

$conn=mysqli_connect($host,$CIN,$PASSWORD);
$database=mysqli_select_db($conn,$db);
if(isset($_POST['cin'])){
  $cin=$_POST['cin'];
  $password_=$_POST['password'];
  $sql_login="SELECT * FROM `employe` WHERE CIN='".$cin."' AND PASSWORD='".$password_."'limit 1";
  $result= mysqli_query($conn,$sql_login);
  if(mysqli_num_rows($result)>0){
    echo "<script type=\"text/javascript\">document.getElementById('login').className +=' verify-login';
    document.querySelector('body').style.overflowY = 'scroll';</script>";
    
  }else{
    echo "invalid inputs";
    exit();
  } 

}

?>





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
        <li><a href="#">Ajouter des produits</a></li>
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

    <div class="cat-class">
      <div class="box_">

        <div class="box--img"><img src="image/wash/wc3.png" alt="Machine a laver" id="cat1"></div>
        <div class="name-cate">
          <p>Machine a laver</p>
        </div>

      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/tv/tv2.jpg" alt="Télévision" id="cat2">
        </div>
        <div class="name-cate">
          <p>Télévision</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/seo/sh2.jpg" alt="Machine a coudre" id="cat2">
        </div>
        <div class="name-cate">
          <p>Machine a coudre</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/forno/oven1.png" alt="Four electrique" id="cat2">
        </div>
        <div class="name-cate">
          <p>Four electrique</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/cafe/c2.jpg" alt="Machine à café" id="cat2">
        </div>
        <div class="name-cate">
          <p>Machine à café</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/refrigerator/fr1.jpg" alt="Réfrigérateur" id="cat2">
        </div>
        <div class="name-cate">
          <p>Réfrigérateur</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/clean/n2.jpg" alt="Inspirateur" id="cat2">
        </div>
        <div class="name-cate">
          <p>Inspirateur</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/ice/ice-fr5.jpg" alt="Machine a vaisselle" id="cat2">
        </div>
        <div class="name-cate">
          <p>Machine a vaisselle</p>
        </div>
      </div>
    </div>
    <!--sign html-->
    <div class="sign-in" id="login">
      <div class="form-box">
        <div class="sign-in-up">
          <div id="btn"></div>
          <button class="toggle-btn" onclick="logIn()">Sign in</button>
          <button class="toggle-btn" onclick="signUp()">sign up</button>
        </div>
        <!-- login form -->
        <form action="" method="POST" id="log-in" class="input-group">
          <label for="Cin">CIN</label>
          <input type="text" name="cin" id="cin-sign-in" placeholder="Enter votre Cin?" class="input-field" required>
          <label for="password">Mot de passe</label>
          <div class="password-visibilty"><input type="password" name="password" id="password-log-in" placeholder="Enter le mot de passe?" class="input-field" required><span><input type="checkbox" name="show-hide-pass" id="show-hide-pass-log-in" onclick="showPassword(1)"></span></div>
          <div class="inp">
            <input type="checkbox" class="checkBox" name="check_box" id="rememb-pass"><span>Remember password</span>
          </div>
          <button type="submit" class="submit-btn">
            Login
          </button>
        </form>
        <form action="sign in" method="get" id="register" class="input-group">
          <label for="usrname">Nom de utilisateur</label>
          <input type="text" name="username" id="usrname-sign-up" placeholder="Enter votre username?" class="input-field" required>
          <label for="Cin">CIN</label>
          <input type="text" name="cin" id="cin-sign-up" placeholder="Enter votre Cin?" class="input-field" required>
          <label for="usrname">Mot de passe</label>
          <div class="password-visibilty"><input type="password" name="password" id="password-sign-up" placeholder="Create un mot de passe?" class="input-field" required><span><input type="checkbox" name="show-hide-pass" id="show-hide-pass-sign-up" onclick="showPassword(2)"></span></div>
          <div class="inp">
            <input type="checkbox" class="checkBox" name="check_box" id="term-condition"><span>I agree to term & condition</span>
          </div>
          <button type="submit" class="submit-btn">
            Login
          </button>
        </form>
      </div>
    </div>

  </main>

  <!-- javascript code -->
  <script>

    function responsive() {
      var x = document.getElementById("myTopnav");
      // if (x.className === "container") {
      //   x.className += " topnav";
      // } else {
      //   x.className = "container";

      // }
      x.className === "container" ? x.className += " topnav" : x.className = "container";

    }
    var login=document.getElementById('log-in');
    var register=document.getElementById('register');
    var SwitchChange = document.getElementById('btn');
    
    function signUp(){
      login.style.left= "-450px";
      register.style.left="0px";
      SwitchChange.style.left="110px";
    }
    function logIn(){
      login.style.left= "0px";
      register.style.left="450px";
      SwitchChange.style.left="0px";  
    }
    var passwordLog = document.getElementById("password-log-in");
    var passwordSign = document.getElementById("password-sign-up");
    function showPassword(inOrUp) {
  if (passwordLog.type === "password" && inOrUp===1) {
    passwordLog.type = "text";
  } else if (passwordLog.type === "text" && inOrUp===1)  {
    passwordLog.type = "password";
  }
  if (passwordSign.type === "password" && inOrUp===2) {
    passwordSign.type = "text";
  } else if (passwordSign.type === "text" && inOrUp===2)  {
    passwordSign.type = "password";
  }
}


  </script>
  
</body>

</html>