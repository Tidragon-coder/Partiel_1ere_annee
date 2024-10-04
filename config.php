<?php

define('SQL_HOST', 'localhost');
define('SQL_NAME', 'fftxcnvh_mimuss');
define('SQL_USER', 'fftxcnvh_mimuss');
define('SQL_PASS', 'Mimuss&*123');

try {
    // On crée un objet de connexion à la base de données
    $sql = new PDO('mysql:dbname='.SQL_NAME.';charset=utf8;host='.SQL_HOST, SQL_USER, SQL_PASS);
} catch(Exception $e) { 
    // Si erreur, on l'affiche
    die('Erreur:'.$e->getMessage());
}