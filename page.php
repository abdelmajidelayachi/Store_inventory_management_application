<?php

$host= 'localhost';
$user = 'root';
$pass = '';
$dbname='les-produit';

try{
    $dsn = 'mysql:host='.$host.';dbname='.$dbname;
    $pdo = new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    // echo"La connexion a la base de dones";

}

catch(PDOException $e){

    echo"Pas de connexion a la base de donnees".$e-> getMessage();
}

?>