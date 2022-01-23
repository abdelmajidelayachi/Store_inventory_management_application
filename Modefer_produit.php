
<?php
require_once 'page.php';
 
$stmt = $pdo->query('SELECT*FROM produit');

 if (isset($_POST['updatebtn'])) {
  $Category = $_POST['Category'];
  $Marque = $_POST['Marque'];
  $Quantity = $_POST['Quantity'];
  $Color = $_POST['Color'];
  $Prix = $_POST['Prix'];

  $sql = "UPDATE 'produit' SET 'Category'=:Category, 'Marque'=:Marque, 'Color'=:Color, 'Quantity'=:Quantity, 'Prix'=:Prix, 'images'=:images WHERE Id=:iduid";
  $stmt = $pdo->prepare($sql);
  $query->bindParam(':Category', $Category, PDO::PARAM_STR);
  $query->bindParam(':Marque', $Marque, PDO::PARAM_STR);
  $query->bindParam(':images', $picProfil, PDO::PARAM_STR);
  $query->bindParam(':Quantity', $Quantity, PDO::PARAM_STR);
  $query->bindParam(':Color', $Color, PDO::PARAM_STR);
  $query->bindParam(':Prix', $Prix, PDO::PARAM_STR);

  $stmt->execute();
  echo "<script>alert('Vous avez modifier un produit')</script>";
  echo "<script>window.location.href='category.php'</script>";
 }
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="form">
    <section class="contoner-produit heiden" id="sect-01">
      <div id="ajouterProduit">
        <?php
        $userid = intval($_GET['Id']);
        $sql = "SELECT `Category`,`Marque`,`Color`,`Quantity`,`Prix`,`image` FROM `produit` WHERE Id=:nouvelleId";

        $query = $pdo->prepare($sql);
        $query->bindParam(':nouvelleId', $userid, PDO::PARAM_STR);
        $query->execute();

        $resultat = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($resultat as $row) {
        ?>
          <form action="" class="config" method="POST" action="page.php">

            <div class="cotoner-child">
              <label>Image :</label>
              <input id="Image" class="input-parts" name="images" type="file" placeholder="./image/photo.png" width="48" height="48" value="<?php echo $row->images ?>">
            </div>

            <div class="cotoner-child">
              <label>Category :</label>
              <input class="input-parts" type="text" name="Category" id="category" value="<?php echo $row->Category ?>">
            </div>

            <div class="cotoner-child">
              <label>Marque :</label>
              <input class="input-parts" type="text" name="Marque" id="marque" value="<?php echo $row->Marque ?>">
            </div>

            <div class="cotoner-child">
              <label>Color :</label>
              <input class="input-parts" type="text" name="Color" id="color" value="<?php echo $row->Color ?>">
            </div>

            <div class="cotoner-child">
              <label>Quantity :</label>
              <input class="input-parts" type="number" name="Quantity" id="quantity" min="1" value="<?php echo $row->Quantity ?>">
            </div>

            <div class="cotoner-child">
              <label>Prix :</label>
              <input class="input-parts" type="number" name="Prix" id="prix" min="1" value="<?php echo $row->Prix ?>">
            </div>
          <?php } ?>
          </form>
          <div class="save">
            <button id="retour" onclick="Ajouter_prouduit()">Retour</button>
            <button id="ajouter" name="updatebtn">Enregistrer</button>
          </div>
      </div>
    </section>
  </div>
  <!-- javascript code -->

</body>
<script type="text/javaScript" src="js.js">
    
</body>
</html>