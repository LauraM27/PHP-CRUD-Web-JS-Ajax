<!-- Cette page est le contenu de la page principale du site; Elle présente la liste des clients.
Elle inclue le modele SQl pour acquérir la liste des clients-->

<?php include($_SERVER["DOCUMENT_ROOT"].'/PHPMVC/PHP/Model/SQL.php'); ?>

<div id="DivSousTitre">
	<h5>Sélectionner un ou plusieurs clients</h5>
</div>
<div id="DivContenu">

<?php listerClients(); // Appel à la fonction Lister Clients de la base de données. Cette fonction crée également les div dans lesquels seront présentées les clients ?>	
</div>
<a href="PHP/Controller/Route.php?action=nouveauClient">
	<button type="button" id="boutonFormulaire">Nouveau Client</button>
</a>
<!-- on entoure le bouton de balise a qui permettra de faire appel à la méthode afficherPage du controller. ?action=nouveauClient correspond au passage de paramètre pour retrouver ces informations dans la variable $_GET. A partir de cela, on saura quelle page affichée. -->