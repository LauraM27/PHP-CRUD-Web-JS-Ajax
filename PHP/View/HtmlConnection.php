<!-- Affichage du formulaire qui permet la saisie -->
<form method="post" action="<?php echo serverRoot; ?>?action=connect">
<h1>Connexion</h1>
	<div class="ligne">
		<label for="pseudo">Pseudo :</label>
		<input name="pseudo" type="text" id="pseudo" />
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="password">Mot de Passe :</label>
		<input type="password" name="password" id="password" />
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<input type="submit" value="Connexion" />
	</div>
	<div class="espaceHorizon "></div>
</form>
<div class="ligne">
	<a href="<?php echo serverRoot; ?>?action=nouveauUser">Pas encore inscrit ?</a>
</div>
<div class="espaceHorizon "></div>
<div class="espaceHorizon "></div>