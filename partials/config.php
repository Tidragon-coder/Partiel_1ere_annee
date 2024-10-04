<?php 

//en premier on demarre la session 
session_start();


//connexion a la base 
define('SQL_HOST', 'localhost');
define('SQL_NAME', 'mimuss');
define('SQL_USER', 'root');
define('SQL_PASS', '');


try{
//on cree un obj de connexion a la base 
$sql = new PDO('mysql:dbname='.SQL_NAME.'; charset=utf8;host='.SQL_HOST,SQL_USER,SQL_PASS);

}catch(Exception $e){ // si erreur nous l'envoyer
    die('Erreur:'.$e->getMessage());
}

//Charger les fonctions 

//require('functions.php');