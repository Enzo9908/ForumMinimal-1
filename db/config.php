<?php
// Informations d'identification
define('DB_SERVER', 'mysql-juliencasta.alwaysdata.net');
define('DB_USERNAME', '214699_admin');
define('DB_PASSWORD', 'EnzoJulienRomain13');
define('DB_NAME', 'juliencasta_phpproj1');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter à la base de données. " . mysqli_connect_error());
}
?>