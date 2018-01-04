<?php

	include("header.php");
	include("db_config.php");

	//Traitement pour afficher la liste des etudiants
	$SQL='SELECT * FROM etudiants';
	$res = mysql_query($SQL);

	echo"<form action='' method='post'>";
	echo"<table border=1px>";
	while($row = mysql_fetch_array($res))
	{
		echo "<tr><td>$row[eid]</td><td>$row[nom]</td><td>$row[prenom]</td><td>$row[email]</td><td>$row[fid]</td><td><a href='etu_liste_stages.php'>Voir la liste des stages</a></td></tr>";
	}
	
	echo"</table>";
	echo"</form>";

include("footer.php");

?>


