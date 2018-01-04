<?php
	
	include("header.php");
	include("db_config.php");

	
	
	if (!($_POST["titre"]) || !($_POST["description"]))
	{
	echo "Vous n'avez pas encore fais une modification<br/><br/>";
	echo "<a href='ajout_stage_form.php'></br></br>Retourner le formulaire</a>";
	include "footer.php";
	exit ();
	}


	$sid = mysql_real_escape_string($_POST["sid"]);
	$titre = mysql_real_escape_string($_POST["titre"]);
	$description = mysql_real_escape_string($_POST["description"]);

	$SQL = "UPDATE stages SET titre='$titre', description='$description' WHERE sid='$sid'"; 
	$res = mysql_query($SQL);
	if (!$res) die('Error: ' . mysql_error());
	else echo "La modification a été prise en compte.";


	echo "<a href='entreprises.php'></br></br>Retourner sur la liste</a>";

	include("footer.php");
?>
