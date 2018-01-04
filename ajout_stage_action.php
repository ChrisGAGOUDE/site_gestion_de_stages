<?php
	
	include("header.php");
	include("db_config.php");

	
	if (!($_POST["titre"]) || !($_POST["description"]))
	{
	echo "Certains champs ont ete mal renseignes<br/><br/>";
	echo "<a href='stage_modifier_form.php'></br></br>Retourner le formulaire</a>";
	include "footer.php";
	exit ();
	}

	$titre = mysql_real_escape_string($_POST["titre"]);
	$description = mysql_real_escape_string($_POST["description"]);

	$SQL = "SELECT * FROM stages WHERE titre='$titre' ";
	$res = mysql_query($SQL);

	if (!$res) die('Error: ' . mysql_error());
	$row=(mysql_fetch_array($res));

	if ($res && mysql_num_rows($res)>0)
	{
	echo "Ce stage a deja ete ajoute !<br/><br/>";
	echo "<a href='ajout_stage_form.php'>Retourner sur le formulaire</a>";
	include "footer.php";
	exit ();
	}

	else
		
		{
			$SQL2 = "INSERT INTO stages VALUES ('$sid','$eeid','$fid','$cid', '$titre','$description')";
			$res2 = mysql_query($SQL2);
			if (!$res2) die('Error: ' . mysql_error());
			else echo "Le stage a bien ete ajoute";
		}

	echo "<a href='entreprises.php'></br></br>Retourner sur la liste</a>";

	include("footer.php");
?>
