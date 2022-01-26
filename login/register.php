<?php 
 $host = "localhost";
  $CIN = "root";
  $PASSWORD = "";
  $db = "management_of_magasin";
  $conn = mysqli_connect($host, $CIN, $PASSWORD);
  $database=mysqli_select_db($conn,$db);
  if(isset($_POST['register-btn'])
  && !empty(trim($_POST['usernameSign']))
  && !empty(trim($_POST['passwordSign']))
  && !empty(trim($_POST['cinSign']))
 ){
    $cin=$_POST['cinSign'];
    $uName = $_POST['usernameSign'];
    $password_=$_POST['passwordSign'];
    $sql_login="SELECT * FROM `employe` WHERE CIN='".$cin."'";
    $result= mysqli_query($conn,$sql_login);
    if(mysqli_num_rows($result)>0){
      echo "<script>alert('CIN est déja exist')</script>";
      header("location:connexion.php");
    }else{
      echo "<script>alert('Votre compte a etait crée')</script>";
      $reg= "INSERT INTO `employe` (`ID`, `USER`, `CIN`, `PASSWORD`) VALUES (NULL, '".$uName."', '".$cin."', '".$password_."')";
      mysqli_query($conn,$reg);
      header("location:connexion.php");
    } 
  }elseif(isset($_POST['register-btn'])){
    echo "<script>alert('Please remplir les inputs ')</script>";
  }

?>