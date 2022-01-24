<?php 
if(isset($_GET['submit-search']) && !empty($_GET['search'])){

  $stmt = $pdo->query("SELECT*FROM produit WHERE Category LIKE '".$_GET['search']."' OR Marque LIKE '".$_GET['search']."'");
  if($stmt->rowCount() < 1){

    $stmt = $pdo->query("SELECT*FROM produit ");
    echo "<script>alert('".$_GET['search']." n exist pas' )</script>";
  }
  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
}


?>

