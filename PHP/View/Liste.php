<?php

$liste = PersonneManager::getList();
?>
<div class="espaceHorizon "></div>
<div id="contenu">
	<?php if ($_SESSION['level']==2) //c'est un administrateur
		echo '<div class="ligne">Vous êtes administrateur</div>'
	?>
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href='<?php echo serverRoot."?action=ajout"; ?>' >Ajouter </a>
</div>
<?php
if ($liste!=null) {
	?>
		<div id="crudTableau">
		<table id="crud" class="avectri">
			<thead class="crudEntete">
                <th class="crudColonne"  >Nom</th>
                <th class="crudColonne"  >Prenom</th>
			</thead>
			<?php 
			foreach ($liste as $elt) {
			    echo '<tr class="crudLigne">';
    			echo '<td class="crudColonne">' . $elt->getNom() . '</td>';
    			echo '<td class="crudColonne">' . $elt->getPrenom() . '</td>';
				echo '<td class="crudColonneBtn">';
                echo '<a class=" crudBtn crudBtnEdit" href="'.serverRoot.'?action=edit&id='.$elt->getId().'">Afficher </a>';
				echo '<a class=" crudBtn crudBtnModif"  href="'.serverRoot.'?action=modif&id='.$elt->getId().'" >Modifier</a>';
				if ($_SESSION['level']==2) //c'est un administrateur
				echo '<a class=" crudBtn crudBtnSuppr" href="'.serverRoot.'?action=delete&id='.$elt->getId().'" >Supprimer</a></td>';
				echo '</tr>';
			}
			?>
<tr class="crudLigne">
	<td>total</td>
	<td id="total"></td><!-- le total est calculé par le code AJAX-->
</tr>
		</table>
	</div>
		<?php } ?>

</div>
<div class="espaceHorizon "></div>
<div class="espaceHorizon "></div>
<!-- appel d'un script Ajax pour compter le nombre de ligne en base de données
<script src="<?php echo Parametre::getAdresseRoot(); ?>JS/ajax.js"></script>
