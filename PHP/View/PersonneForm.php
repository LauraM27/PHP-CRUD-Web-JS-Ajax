<?php
$action = $_GET['action'];

echo '<div id="DivSousTitre">';
switch ($action) {
    case "ajout":
        {
            echo '<div class="ligne"><h3>Ajouter un nouveau client</h3></div>
	<form id="formulaire" method="post" action="Routes.php?action=addClient">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "edit":
        {
            echo '<div class="ligne"><h3>Editer un client</h3></div>
	<form id="formulaire" method="post" >';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "modif":
        {
            echo '<div class="ligne"><h3>Modifier un  client</h3></div>
	<form id="formulaire" method="post" action="Routes.php?action=updClient">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "delete":
        {
            echo '<div class="ligne"><h3>Supprimer un  client</h3></div>
	<form id="formulaire" method="post" action="Routes.php?action=delClient">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
}
if (isset($_GET['id'])) {
    $pers = PersonneManager::getById($_GET['id']);
}

?>
	<input type="hidden" name="id" value="<?php if (isset($pers)) echo $pers->getId(); ?>">
	<div class="ligne">
		<label for="nom">Nom :</label>
	<input type="text" name="nom" value ="<?php if (isset($pers)) echo $pers->getNom(); ?>"><br><br>
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="nom">Prénom : </label>
	<input type="text" name="prenom" value ="<?php if (isset($pers)) echo $pers->getPrenom(); ?>"><br><br>
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="nom">Adresse :</label>
	<input type="text" name="adresse" value ="<?php if (isset($pers)) echo $pers->getAdresse(); ?>"><br><br>
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="nom">Code Postal :</label>
	<input type="text" name="codepostal" value ="<?php if (isset($pers)) echo $pers->getCodePostal(); ?>"><br><br>
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="nom">Ville :</label>
	<input type="text" name="ville" value ="<?php if (isset($pers)) echo $pers->getVille(); ?>"><br><br>
	</div>
	<div class="espaceHorizon "></div>
	<?php 
	switch ($action) {
		case "ajout":
			{
				echo '<div class="ligne"><input type="submit" value="Ajouter" />'; break;
			}
		case "modif":
			{
				echo '<div class="ligne"><input type="submit" value="Modifier" />'; break;
			}
		case "delete":
			{
				echo '<div class="ligne"><input type="submit" value="Supprimer" />'; break;
			}
		case "edit":
			{
				echo '<div class="ligne">';
			}
		}

	?>
	<input type="reset" value="Annuler" onclick='location.href="Routes.php?action=liste"'/></div>
	<div class="espaceHorizon "></div>
	<div class="espaceHorizon "></div>
	<div class="espaceHorizon "></div>

</form>
