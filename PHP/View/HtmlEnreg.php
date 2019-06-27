<!-- Affichage du formulaire qui permet la saisie -->
<h1>Inscription</h1>

<form method="post" action="<?php echo serverRoot; ?>?action=nouveauUser" enctype="multipart/form-data">
	<div class="ligne">
	<label for="pseudo">* Pseudo : </label>
	<input name="pseudo" type="text" id="pseudo" /> 
	</div>
	<div class="ligne">
	(le pseudo doit contenir entre 3 et 15 caractères)
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="password">* Mot de Passe : </label>
		<input type="password" name="password" id="password" />
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<label for="confirm">* Confirmer le mot de passe : </label>
		<input type="password" name="confirm" id="confirm" />
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		Les champs précédés d'un * sont obligatoires
	</div>
	<div class="espaceHorizon "></div>
	<div class="ligne">
		<input type="submit" value="S'inscrire" />
	</div>

</form>
<div class="espaceHorizon "></div>
<div class="espaceHorizon "></div>