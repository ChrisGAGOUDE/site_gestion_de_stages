<?php
	include("header.php");
?>
<form method="post" action="ajout_stage_action.php">
	<p>Les champs marques d'une (*) sont obligatoires</p>
	<table>
		<tr><td>Titre*</td><td><input type="text" name="titre" size="17" /></td></tr>
		<tr><td>Description*</td><td><textarea name="description"  id="ameliorer"></textarea></td>
	</table>
	<input type="submit" value="Ajouter" />
</form>
	
<?php
	include("footer.php");
?>
