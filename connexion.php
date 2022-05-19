<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'nour_transport_contact');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch (Exception $e) {
    die("Erreur de connexion à la base de données pour cette erreur :".$e->getMessage());
}

?>