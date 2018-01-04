<?php
	include("header.php");
?>
<form method="post" action="filieres_ajout_action.php">
	<p>Veuillez entrer les champs (obligatoires) suivants :</p>
	<table>
		<tr><td>Nom*</td><td><input type="text" name="nom" size="17" /></td></tr>
	</table>
	<input type="submit" value="Ajouter" />
</form>

<?php
	include("footer.php");
?>
