<?php
session_start();
if (!isset($_SESSION['g'])) {
  header('location:login/connexion.php');
}

require_once('page.php');

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
<style>
  .disktop .current-index a {
    color: #000 !important;
    border-bottom: 4px solid #F4FAF9 !important;

  }
</style>

<body class="sign-mode">
  <!-- header -->
  <?php require_once 'nav-bar.php'; ?>
  <main>
    <?php

    $stmt_b = $pdo->query('SELECT*FROM produit');
    $row_b = $stmt_b->fetchAll(PDO::FETCH_ASSOC);


    $prix_total = 0;
    if(sizeof($row_b)>0){
    foreach ($row_b as $i => $values) {
      $arr_b[$i] = $values['Category'];
      $prod_num[] = $values['Marque'];
      $prix_total = $prix_total + $values['Quantity'] * $values['Prix'];
    }
    $arr_b = array_unique($arr_b);

    ?>

    
    <!-- write code here   -->
    <div class="chiffre">
      <div class="gain-jour">
        <h1>Nombre des catégorie</h1>
        <p><?php echo sizeof($arr_b); ?></p>
      </div>
      <div class="gain-mois">
        <h1>Nombre des produits</h1>
        <p><?php echo sizeof($prod_num); ?></p>
      </div>
      <div class="total-gain">
        <h1>Total de montants au store</h1>
        <p><?php echo $prix_total; ?> DH</p>
      </div>
    </div>


    <div class="cat-class">
      <?php
      foreach ($arr_b as  $value) {
        $stmt_c = $pdo->query("SELECT * FROM produit WHERE Category LIKE '" . $value . "'");
        $row_c = $stmt_c->fetch(PDO::FETCH_ASSOC);

      ?>

        <div class="box_">
          
          <div class="box--img"><img src="./uploads/<?php echo $row_c['images']; ?>" alt="Machine a laver" id="cat1"></div>
          <div class="name-cate">
            <p><?php echo $value; ?></p>
          </div>

        </div>
      <?php } ?>
              
      
    </div>
    <?php } ?>
    <!-- 
        $count=0;
        
        if($count==0){
          echo $dt;
          $connect=true;
        }
        

    $database = mysqli_select_db($conn, $db);
    if (isset($_POST['cin'])) {
      $cin = $_POST['cin'];
      $password_ = $_POST['password'];
      $sql_login = "SELECT * FROM `employe` WHERE CIN='" . $cin . "' AND PASSWORD='" . $password_ . "'limit 1";
      $result = mysqli_query($conn, $sql_login);
      if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('you logged in')</script>";
        $connect=true;
        exit();
      } else {
        echo $dt;
        $connect=false;
        exit();
      }
    }
    

    ?> -->


  </main>

  <!-- javascript code -->
  <script type="text/javaScript" src="js.js">
  </script>

</body>

</html>