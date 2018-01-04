<?php 
	include("header.php");
?>
<form method="post" action="etu_envoi_action.php">
	<p>Veuillez entrer les champs (obligatoires) suivants :</p>
	<table>
		<tr><td>Nom*</td><td><input type="text" name="nom" size="17" /></td></tr>
		<tr><td>Prenom*</td><td><input type="text" name="prenom"size="17" /></td></tr>
		<tr><td>email*</td><td><input type="email" name="email"size="17" /></td></tr>
		<tr><td>Filiere*</td><td>
		<select name='fid'>
		<?php
			$SQL = "SELECT * FROM filieres";
			$res = mysql_query($SQL);
			while($row=mysql_fetch_array($res))
			{
				echo "<option value='$row[fid]'>$row[nom]</option>";
			}
		?>
		
		</select>
	</table>
	<input type="submit" value="Envoyer" />
	<a href="etudiants.php"><input type="button" value="annuler" /></a> 
</form>
