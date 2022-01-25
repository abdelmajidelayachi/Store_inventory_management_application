  
<?php 
session_start();
if(!isset($_SESSION['g'])){
  header('location:login/connexion.php');
}
?>

<?php

require_once 'page.php';
$stmt = $pdo->query('SELECT*FROM produit');
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);


// $conn->satAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if($pageWasRefreshed ) {
  $stmt = $pdo->query('SELECT*FROM produit');
  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);;
} else {
  include('search.php');
}

$stmt_b = $pdo->query('SELECT*FROM produit');
$row_b = $stmt_b->fetchAll(PDO::FETCH_ASSOC);






if (isset($_REQUEST['del'])) {
  $sup = intval($_GET['del']);
  $sql = "DELETE FROM produit WHERE Id=:Id ";
  $query = $pdo->prepare($sql);
  $query->bindParam(':Id', $sup, PDO::PARAM_STR);
  $query->execute();

  echo "<script>alert('Vous avez supprimer un produit')</script>";
  echo "<script>window.location.href='category.php'</script>";
}
$index = 0;
$id = 0;
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
  <link rel="stylesheet" href="style/report.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
    .disktop .current-category a{
  color: #000 !important;
  border-bottom: 4px solid #F4FAF9 !important; 

}
  </style>
</head>

<body>
<!-- header -->
<?php require_once 'nav-bar.php'; ?>

<main>
  <!-- write code here   -->
  <div class="bar-container">
    <ul>
      <li class="current-cat"><a href="category.php">Toutes</a></li>
      <?php

      foreach ($row_b as $i => $values) {
        $arr_b[$i] = $values['Category'];
      }
      

      $arr_b = array_unique($arr_b);

      foreach ($arr_b as $i => $values) {
        echo '<li onclick="location.reload();
        "><a href="#'.$arr_b[$i].'">' . $arr_b[$i] . '</a></li>';
      }
      foreach ($row as $i => $values) {
        $arr[$i] = $values['Category'];
      }


      $arr = array_unique($arr);

      ?>

    </ul>

  </div>
  <?php
  if ($stmt->rowCount() > 0) {

    // Do stuff


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

      // 

      $arr[$count_cate] = $row['Category'];

      $countcate++;
    }
    $cate = array_unique($arr);


    foreach ($cate as $cat_element) {



  ?>





      <section class="category" id="caty1" id="<?php echo $cat_element; ?>"><a name="<?php echo $cat_element; ?>">
        <?php
        $resul = $pdo->query("SELECT * FROM produit WHERE Category LIKE '" . $cat_element . "' ");
        while ($row_cat = $resul->fetch(PDO::FETCH_ASSOC)) {


        ?>
          <div class="cotoner-child" id="produit1">
            <button class="produit" onmouseover="afichage_over(this,<?php echo $index; ?>)" onmouseout="afichage_out(this,<?php echo $index; ?>)">
              <img src="./uploads/<?php echo $row_cat['images']; ?>" alt="tv">
              <br><br>
              <p><?php echo $row_cat['Marque']; ?></p><br>
              <h3><span id="tv1-price"> <?php echo $row_cat['Prix']; ?></span> DH</h3><br>
              <p><span id="tv1-num"><?php echo $row_cat['Quantity']; ?></span> pieces</p>
            </button>
            <div class="afichage ident frame">
              <a href="Modefer_produit.php?id=<?php echo $row_cat['Id']; ?>">
                <button id="Modifier">Modifier</button>
              </a>
              <!-- <a href="category.php?id=<php echo $row['Id']; ?>" ><button id="Modifier" onclick="Ajouter_prouduit()">Modifier</button></a> -->
              <a href="category.php?del=<?php echo $row_cat['Id']; ?>"><button id="Supprimer">Supprimer</button></a>
            </div>
          </div>
        <?php $index++;
        } ?>
      </section>

      <br>
  <?php }
 } else
    // echo "<h3><aucune produit</h3>"
  
   ?>





</main>


<!-- javascript code -->

</body>
<script type="text/javaScript" src="js.js">

</script>

</html>