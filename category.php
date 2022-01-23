<?php

require_once 'page.php';

// $conn->satAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$stmt = $pdo->query('SELECT*FROM produit');
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);









if (isset($_REQUEST['del'])) {
  $sup = intval($_GET['del']);
  $sql = "DELETE FROM produit WHERE Id=:Id ";
  $query = $pdo->prepare($sql);
  $query->bindParam(':Id', $sup, PDO::PARAM_STR);
  $query->execute();

  echo "<script>alert('Vous avez supprimer un produit')</script>";
  echo "<script>window.location.href='category.php'</script>";

}




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
  <link rel="stylesheet" href="style/category.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
  </style>
</head>

<body></body>
  <!-- header -->
  <?php require_once 'nav-bar.php'; ?>

  <main>
    <!-- write code here   -->
    <div class="bar-container">
      <ul>
        <li class="current-cat"><a href="#">Toutes</a></li>
        <?php 
        
        $arr=array("");
        
        foreach($row as $id=>$values){
          
            if($values['Category']!==$arr[$id]){
              $arr[$id]=$values['Category'];
            }
            
        // echo'<li><a href="#">'.$values['Category'].'</a></li>';

        }
        foreach($arr as $id=>$values){
          echo'<li><a href="#">'.$values[$id].'</a></li>';
        }
        ?>
        
      </ul>
     
    </div>
<?php
// echo $values['Category'];


    
      
?>
    <section class="category" id="caty1">
        <?php 
      foreach($row as $id=>$values){
     
      if($values['Category']==='TV' ){
     
      
      
        ?>   
        <div class="cotoner-child" id="produit1">
          <button class="produit" onmouseover="afichage_over(this,<?php echo $id; ?>)" onmouseout="afichage_out(this,<?php echo $id; ?>)">
            <img src="./uploads/<?php echo $values['images']; ?>" alt="<?php echo $values['images']; ?>">
            <br><br>
            <p><?php echo $values['Marque']; ?></p><br>
            <h3><span id="tv1-price"> <?php echo $values['Prix']; ?></span> DH</h3><br>
            <p><span id="tv1-num"><?php echo $values['Quantity']; ?></span> pieces</p>
          </button>


          <div class="afichage ident frame">
            <button id="Modifier" onclick="Ajouter_prouduit()">Modifier</button>
            <a href="Category.php?del=<?php echo $result[$i]->Id; ?>"><button id="Supprimer">Supprimer</button></a>
          </div>
        </div>
      <?php $id++;
      }} ?>
    </section>
<?php
    if($values['Category']==='TV'){
      foreach($row as $id=>$values){
?>

<section class="category" id="caty1">
        <?php 
      
     

     
      
      
        ?>   
        <div class="cotoner-child" id="produit1">
          <button class="produit" onmouseover="afichage_over(this,<?php echo $id; ?>)" onmouseout="afichage_out(this,<?php echo $id; ?>)">
            <img src="./uploads/<?php echo $values['images']; ?>" alt="<?php echo $values['images']; ?>">
            <br><br>
            <p><?php echo $values['Marque']; ?></p><br>
            <h3><span id="tv1-price"> <?php echo $values['Prix']; ?></span> DH</h3><br>
            <p><span id="tv1-num"><?php echo $values['Quantity']; ?></span> pieces</p>
          </button>


          <div class="afichage ident frame">
            <button id="Modifier" onclick="Ajouter_prouduit()">Modifier</button>
            <a href="Category.php?del=<?php echo $result[$i]->Id; ?>"><button id="Supprimer">Supprimer</button></a>
          </div>
        </div>
      <?php $id++;
       ?>
    </section>
    <?php }}
    ?>





  </main>

  <?php require_once 'Modefer_produit.php'; ?>
  <!-- javascript code -->

</body>
<script type="text/javaScript" src="js.js">


</script>

</html>