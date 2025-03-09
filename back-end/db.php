<?php

$host = 'localhost';
$dbname = 'clicker';
$username = 'root';
$password = 'root';

try {
    self::$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    //self::$bdd = new PDO('mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201638', 'dutinfopw201638', 'gagyqapu');
    self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
