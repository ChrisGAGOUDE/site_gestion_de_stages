<?php
	include("header.php");
	include("db_config.php");


	
	$SQL = "DELETE FROM etudiants WHERE eid='$eid'";
	
	$res = mysql_query($SQL);
	if (!$res) die('Error: ' . mysql_error());
	else echo "L'etudiant a bien ete supprimé";
	

	echo"<p><a href='responsables.php'>Revenir à la page d'accueil</a></p>";


	include("footer.php");
?>
