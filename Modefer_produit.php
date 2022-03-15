<?php
session_start();
if (!isset($_SESSION['g'])) {
  header('location:login/connexion.php');

}
?>
<?php
require_once 'page.php';


if( isset($_POST['retour'])){
  header('location:category.php');
}

if (
  isset($_POST['updatebtn'])
  && !empty($_POST['Category'])
  && !empty($_POST['Marque'])
  && !empty($_POST['Quantity'])
  && !empty($_POST['Color'])
  && !empty($_POST['Prix'])
) {
  $userid = intval($_GET['id']);
  $Category = $_POST['Category'];
  $Marque = $_POST['Marque'];
  $Quantity = $_POST['Quantity'];
  $Color = $_POST['Color'];
  $Prix = $_POST['Prix'];






  $sql = "UPDATE `produit` SET `Category`=:Category, `Marque`=:Marque, `Color`=:Color, `Quantity`=:Quantity, `Prix`=:Prix WHERE `Id`=:Id";

  $query = $pdo->prepare($sql);

  $query->bindParam(':Category', $Category, PDO::PARAM_STR);
  $query->bindParam(':Marque', $Marque, PDO::PARAM_STR);
  $query->bindParam(':Quantity', $Quantity, PDO::PARAM_STR);
  $query->bindParam(':Color', $Color, PDO::PARAM_STR);
  $query->bindParam(':Prix', $Prix, PDO::PARAM_STR);
  $query->bindParam(':Id', $userid, PDO::PARAM_STR);

  $query->execute();
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
  <link rel="stylesheet" href="style/ajouter.css">
  <title>ModeferProduit</title>
</head>

<body>
  <?php require_once 'nav-bar.php'; ?>
  <div id="form">
    <section id="sect-01" style="display:blok;">
      <div id="ajouterProduit">
        <?php
        $userid = intval($_GET['id']);
        $sql = "SELECT * FROM `produit` WHERE id=:Id";

        $query = $pdo->prepare($sql);
        $query->bindParam(':Id', $userid, PDO::PARAM_STR);
        $query->execute();

        $resultat = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($resultat as $row) {
        ?>
          <form action="" class="config" method="POST">




            <!-- <div class="cotoner-child">
              <label>Image :</label>
              <input class="input-parts" type="file" class="form-control mt-3" name="profil" accept="*/image" value="<php echo $row->images ?>">
            </div> -->

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
            <div class="save">

              <button type="submit" name='retour' id="retour">Retour</button>
              <button id="ajouter" name="updatebtn">Modifier</button>

            </div>

          </form>
        <?php } ?>
      </div>
  </div>
  </section>
  </div>
  <!-- javascript code -->

</body>


</body>
<script type="text/javaScript" src="js.js">
  </html>*