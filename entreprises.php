<?php
	include("header.php");

	include("db_config.php");

 
	
	//Traitement pour la liste des stages
	$SQL='SELECT * FROM stages';
	$res = mysql_query($SQL);

	echo"<form action='ajout_stage_form.php' method='post'>";
	echo"<table border=1px>";
	while($row = mysql_fetch_array($res))
	{
		echo "<tr><td>$row[sid]</td><td>$row[eeid]</td><td>$row[fid]</td><td>$row[cid]</td><td>$row[titre]</td><td>$row[description]</td><td><a href='stage_modifier.php'>Modifier</a></td></tr>";
	}
	echo"<input type='submit' value='Ajouter un stage a la liste'>";
	echo"</table>";
	echo"</form>";

	echo"<br /><strong>Gestion des demandes de stages</strong>"; 

	//Traitement pour les demandes de stages
 	$SQL2='SELECT * FROM demandes';
 	$res2 = mysql_query($SQL2);

 	echo"<form action='' method='post'>";
 	echo"<table border=1px>";
 	while($row = mysql_fetch_array($res2))
 	{
 	echo "<tr><td>$row[did]</td><td>$row[eid]</td><td>$row[eeid]</td><td>$row[sid]</td><td>$row[statut]</td></tr>";
 	}

 	echo"</table>";
 	echo"</form>";

	mysql_close($conn); 
 
	
	include("footer.php");
?>
