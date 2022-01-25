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
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/report.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
  </style>
  <title>Report</title>
  
</head>
<style>
   .disktop .current-report a{
  color: #000 !important;
  border-bottom: 4px solid #F4FAF9 !important; 

}
</style>

<body>
  <!-- header -->
  <?php require_once 'nav-bar.php'; ?>
  <?php 
        
        
        if(sizeof($row)>0){
        foreach($row as $i=>$values){           
         $arr[$i]= $values['Category'];
        }

        
      $arr=array_unique($arr);

        
        ?>
  <main>
    <!-- write code here   -->
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

<?php }?>


    <div class="text">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta eum nemo consequatur deserunt nisi quisquam culpa quo, voluptatum assumenda dolore!</p>
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


      foreach ($arr as $cat_element) {



    ?>
        <table class="report" id="<?php echo $cat_element; ?>">
          
          <tr class="head-table">
            <th colspan='4'><?php echo $cat_element; ?></th>
          </tr>

          <tr>
            <th>Nom de produit</th>

            <th>color</th>
            <th>Stock</th>
            <th>Opération</th>
          </tr>
          <?php
          $resul = $pdo->query("SELECT * FROM produit WHERE Category LIKE '" . $cat_element . "' ");
         
          while ($row_cat = $resul->fetch(PDO::FETCH_ASSOC)) {


          ?>

            <tr>
              <td><?php echo $row_cat['Marque']; ?></td>
              <td><?php echo $row_cat['Color']; ?></td>
              <td><?php echo $row_cat['Quantity']; ?></td>

              <td>2/1/2022</td>
            </tr>
          <?php } ?>
        </table>

    <?php }
    }} ?>




  </main>

  <!-- javascript code -->
  <script type="text/javaScript" src="js.js">
  </script>
</body>

</html>