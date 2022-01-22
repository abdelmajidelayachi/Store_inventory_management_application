  <?php
  session_start();
  $host = "localhost";
  $CIN = "root";
  $PASSWORD = "";
  $db = "management_of_magasin";

  $conn = mysqli_connect($host, $CIN, $PASSWORD);
  $database=mysqli_select_db($conn,$db);
  if(isset($_POST['login-btn'])
  && !empty($_POST['passwordLog'])
  && !empty($_POST['cinLog'])){
    $cin=$_POST['cinLog'];
    $password_=$_POST['passwordLog'];
    $sql_login="SELECT * FROM `employe` WHERE CIN='".$cin."' AND PASSWORD='".$password_."'limit 1";
    $result= mysqli_query($conn,$sql_login);
    if(mysqli_num_rows($result)==1){
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $_SESSION['g']= $row["USER"];
      // echo '<script>alert('.$_SESSION['username'].')</script>';
      header("location:../index.php");
      // echo $_SESSION['g'];
      // echo "<script src='login.js'></script>";
    }else{  
      echo "<script>alert('votre CIN ou mot de passse est incorrect');</script>";
      header("location:connexion.php");

    } 

  }

  ?>
  <?php 
    include('register.php');
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="connexion.css">
  </head>

  <body>

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
          <input type="text" name="cinLog" id="cin-sign-in" placeholder="Enter votre Cin?" class="input-field" required>
          <label for="password">Mot de passe</label>
          <div class="password-visibilty"><input type="password" name="passwordLog" id="password-log-in" placeholder="Enter le mot de passe?" class="input-field" required><span><input type="checkbox" name="show-hide-pass" id="show-hide-pass-log-in" onclick="showPassword(1)"></span></div>
          <button type="submit" class="submit-btn" id="login--btn" name="login-btn">
            Login
          </button>
        </form>
        <form action="connexion.php" method="POST" id="register" class="input-group">
          <label for="usrname">Nom de utilisateur</label>
          <input type="text" name="usernameSign" id="usrname-sign-up" placeholder="Enter votre username?" class="input-field" required>
          <label for="Cin">CIN</label>
          <input type="text" name="cinSign" id="cin-sign-up" placeholder="Enter votre Cin?" class="input-field" required>
          <label for="usrname">Mot de passe</label>
          <div class="password-visibilty"><input type="password" name="passwordSign" id="password-sign-up" placeholder="Create un mot de passe?" class="input-field" required><span><input type="checkbox" name="show-hide-pass" id="show-hide-pass-sign-up" onclick="showPassword(2)"></span></div>
          <div class="inp">
            <input type="checkbox" class="checkBox" name="check_box" id="term-condition"><span>I agree to term & condition</span>
          </div>
          <button type="submit" class="submit-btn"  name="register-btn">
            Sign Up
          </button>
        </form>
        </div>
        </div>
    <script>
      function showPassword(inOrUp) {
      if (passwordLog.type === "password" && inOrUp === 1) {
        passwordLog.type = "text";
      } else if (passwordLog.type === "text" && inOrUp === 1) {
        passwordLog.type = "password";
      }
      if (passwordSign.type === "password" && inOrUp === 2) {
        passwordSign.type = "text";
      } else if (passwordSign.type === "text" && inOrUp === 2) {
        passwordSign.type = "password";
      }
    }
    var login = document.getElementById('log-in');
    var register = document.getElementById('register');
    var SwitchChange = document.getElementById('btn');

    function signUp() {
      login.style.left = "-450px";
      register.style.left = "0px";
      SwitchChange.style.left = "110px";
    }

    function logIn() {
      login.style.left = "0px";
      register.style.left = "450px";
      SwitchChange.style.left = "0px";
    }
    var passwordLog = document.getElementById("password-log-in");
    var passwordSign = document.getElementById("password-sign-up");

    function showPassword(inOrUp) {
      if (passwordLog.type === "password" && inOrUp === 1) {
        passwordLog.type = "text";
      } else if (passwordLog.type === "text" && inOrUp === 1) {
        passwordLog.type = "password";
      }
      if (passwordSign.type === "password" && inOrUp === 2) {
        passwordSign.type = "text";
      } else if (passwordSign.type === "text" && inOrUp === 2) {
        passwordSign.type = "password";
      }
    }
    
    </script>
  </body>

  </html>