<?php
switch ($_GET['action']) {
    case "addClient":
        {
            $p = new Personne(["nom" => $_POST["nom"], "prenom" => $_POST["prenom"], "adresse" => $_POST["adresse"], "codepostal" => $_POST["codepostal"], "ville" => $_POST["ville"]]);
            PersonneManager::add($p);
            break;
        }
    case "updClient":
        {
            $p = new Personne(["id"=>$_POST["id"],"nom" => $_POST["nom"], "prenom" => $_POST["prenom"], "adresse" => $_POST["adresse"], "codepostal" => $_POST["codepostal"], "ville" => $_POST["ville"]]);
            PersonneManager::update($p);
            break;
        }
    case "delClient":
        {
            $p = new Personne(["id"=>$_POST["id"],"nom" => $_POST["nom"], "prenom" => $_POST["prenom"], "adresse" => $_POST["adresse"], "codepostal" => $_POST["codepostal"], "ville" => $_POST["ville"]]);
            PersonneManager::delete($p);
            break;
        }
}

header("location:Routes.php?action=liste");
