<?php
	include("header.php");
	include("db_config.php");

	
	//Traitement pour la liste des stages
	$SQL='SELECT * FROM stages';
	$res = mysql_query($SQL);

	echo"<form action='etu_envoi.php' method='post'>";
	echo"<table border=1px>";
	while($row = mysql_fetch_array($res))
	{
		echo "<tr><td>$row[sid]</td><td>$row[eeid]</td><td>$row[fid]</td><td>$row[cid]</td><td>$row[titre]</td><td>$row[description]</td><td><input type='submit' value='Envoyer une demande' action='etu_envoi.php' /></td></tr>";
	}
	echo"</table>";
	echo"</form>";
	

	include("footer.php");
?>

