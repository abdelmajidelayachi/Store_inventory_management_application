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
        
        
        
        foreach($row as $i=>$values){           
         $arr[$i]= $values['Category'];
        }

        
      $arr=array_unique($arr);

        
        ?>
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
        <p>60.980,110 DH</p>
      </div>
    </div>


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

            <th>Ventes</th>
            <th>Stock</th>
            <th>Date</th>
          </tr>
          <?php
          $resul = $pdo->query("SELECT * FROM produit WHERE Category LIKE '" . $cat_element . "' ");
          while ($row_cat = $resul->fetch(PDO::FETCH_ASSOC)) {


          ?>

            <tr>
              <td><?php echo $row_cat['Marque']; ?></td>
              <td>3</td>
              <td><?php echo $row_cat['Quantity']; ?></td>

              <td>2/1/2022</td>
            </tr>
          <?php } ?>
        </table>

    <?php }
    } ?>




  </main>

  <!-- javascript code -->
  <script type="text/javaScript" src="js.js">
  </script>
</body>

</html>