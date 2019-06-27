<?php
//fichier pour appel AJAX

// on definit les parametres
require "../Controller/Parametre.class.php";
Parametre::init();
//Connection BDD
require "DbConnect.class.php";
DbConnect::init();
//Recherche en base de données
$db = DbConnect::getDb(); // Instance de PDO.
// Compte les personnes en base de données.
$q = $db->query('SELECT count(*) as nb FROM personnes');
$donnees = $q->fetch(PDO::FETCH_ASSOC);
//encodage des données en JSON
echo json_encode($donnees);