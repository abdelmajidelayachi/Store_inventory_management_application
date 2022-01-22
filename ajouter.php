<?php
// faire appel a la base de donnees

require_once 'page.php';

// ajouter un produit depuis le formulaire



if (
    isset($_POST['ajouter'])
    && !empty($_POST['Category'])
    && !empty($_POST['Marque'])
    && !empty($_POST['Quantity'])
    && !empty($_POST['Color'])
    && !empty($_POST['Prix'])
) {
    $Category = $_POST['Category'];
    $Marque = $_POST['Marque'];
    $Quantity = $_POST['Quantity'];
    $Color = $_POST['Color'];
    $Prix = $_POST['Prix'];

    // pour l'image ya bouceaup de chose a jouter

    $images = $_FILES['profil']['name'];
    $tmp_dir = $_FILES['profil']['tmp_name'];
    $imageSize = $_FILES['profil']['size'];
    //creer un dossier nommer le uploads

    $upload_dir = 'uploads/';
    $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
    $picProfil = rand(1000, 1000000) . "." . $imgExt;
    move_uploaded_file($tmp_dir, $upload_dir . $picProfil);

    $sql = "INSERT INTO produit(Id,Category, Marque, Color, Quantity, Prix, images) 
    VALUES (NULL,:Category , :Marque ,:Color, :Quantity, :Prix, :images)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':Category', $Category);
    $stmt->bindValue(':Marque', $Marque);
    $stmt->bindValue(':images', $picProfil);
    $stmt->bindValue(':Quantity', $Quantity);
    $stmt->bindValue(':Color', $Color);
    $stmt->bindValue(':Prix', $Prix);

    $stmt->execute();
}


$stmt=$pdo->query('SELECT * FROM produit');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ajouter des produits</title>
    <link rel="stylesheet" href="style/Category.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
    </style>
</head>

<body>

    <!-- header -->
    <header>
        <div class="header-bar">
            <div class="container_mobile">
                <div class="logo">
                    <img src="./Image/logo-ic.svg" alt="">
                </div>
                <div class="three_bars">
                    <a href="javascript:void(0);" class="icon-menu" onclick="responsive()">
                        <i class="fa fa-bars fa-2x"></i>
                    </a>
                </div>
            </div>

            <div class="search">
                <form action="./" method="get">
                    <div class="searchbar">
                        <input type="text" class="searchbar__input" name="q" placeholder="Cherche produit">
                        <button type="submit" class="searchbar__button">
                            <i class="material-icons">search</i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="container topnav" id="myTopnav">

                <div class="profil-pic">
                    <img src="Image/profile-pic.jpg" alt="profile">
                </div>
                <div class="name">
                    <p>EL Ayachi Abdelmajid</p>
                    <p class="user">Employé</p>
                </div>
                <div class="nav-container mobile">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li class="current.php"><a href="Category.php">catégorie</a></li>
                        <li><a href="Ajouter.php">Ajouter des produits</a></li>
                        <li><a href="report.php">Rapport</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="nav-container disktop">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li class="current.php"><a href="Category.php">Catégorie</a></li>
                <li><a href="ajouter.php">Ajouter des produits</a></li>
                <li><a href="report.php">Rapport</a></li>
            </ul>
        </div>
    </header>
    <div id="form">
        <section id="sect-01" style="display:blok;">
            <div id="ajouterProduit">

                <form class="config" method="post" action="" enctype="multipart/form-data">
                    <div class="cotoner-child">
                        <label>Image :</label>
                        <input type="file" class="form-control mt-3" name="profil" accept="*/image">
                    </div>

                    <div class="cotoner-child">
                        <label>Category :</label>
                        <input class="input-parts" type="text" name="Category" id="category" required>
                    </div>
                    <div class="cotoner-child">
                        <label>Marque :</label>
                        <input class="input-parts" type="text" name="Marque" id="marque" required>
                    </div>
                    <div class="cotoner-child">
                        <label>Color :</label>

                        <input class="input-parts" type="text" name="Color" id="color" required>
                    </div>
                    <div class="cotoner-child">
                        <label>Quantity :</label>
                        <input class="input-parts" type="number" name="Quantity" id="quantity" min="1" required>
                    </div>
                    <div class="cotoner-child">
                        <label>Prix :</label>
                        <input class="input-parts" type="number" name="Prix" id="prix" min="1" required>
                    </div>
                    <div class="save">
                        <button id="retour">Retour</button>
                        <button type="submit" class="btn btn-primary mt-3" name="ajouter">Enregistrer</button>
                    </div>
                </form>

            </div>
        </section>
    </div>


</body>
<script type="text/javaScript" src="js.js">


</script>

</html>