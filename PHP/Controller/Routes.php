<?php
// Le fichier Route permet de gérer toutes les ouvertures de pages

//on definit les constantes qui permet de definir les chemins
if (!class_exists("Parametre")) require "Parametre.class.php";
Parametre::init();
Define("serverRoot", Parametre::getServerRoot());
Define("adresseRoot", $_SERVER['DOCUMENT_ROOT'].Parametre::getAdresseRoot());
// La fonction afficherPage, prend 3 paramètres
// Le chemin où trouver les pages, le nom de la partie contenu à afficher et le titre à donner à la page
function afficherPage($chemin, $page, $titre)
{
    require $chemin . 'Header.php';
    require $chemin . $page;
    require $chemin . 'Footer.php';
}

// A l'include de la page Route, le code suivant est exécuté
// Si la variable $get existe, on exploite les informations pour afficher la bonne page
if (isset($_GET['action'])) {
    // En fonction de ce que contient la variable action de $_GET, on ouvre la page correspondante

    switch ($_GET['action']) {
        case 'nouveauUser':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'FormEnregistrement.php', "Nouvel Utilisateur");
                break;
            }
        case 'connect':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'FormConnection.php', "Connection");
                break;
            }
        case 'deconnect':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'FormDeconnection.php', "Deconnection");
                break;
            }
        case 'liste':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'Liste.php', "Accueil");
                break;
            }
        case 'ajout':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'PersonneForm.php', "Ajout Personne");
                break;
            }
        case 'modif':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'PersonneForm.php', "Modification Personne");
                break;
            }
        case 'delete':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'PersonneForm.php', "Supression Personne");
                break;
            }
        case 'edit':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'PersonneForm.php', "Détail Personne");
                break;
            }
        case 'addClient':
        case 'updClient':
        case 'delClient':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'PersonneAction.php', "Action  Client");
                break;
            }
        case 'combobox':
            {
                afficherPage(adresseRoot . 'PHP/View/', 'Combobox.php', "Combobox");
                break;
            }
    }
} else { // Sinon, on affiche la page principale du site
    afficherPage(adresseRoot . 'PHP/View/', 'FormConnection.php', "Accueil");
}
