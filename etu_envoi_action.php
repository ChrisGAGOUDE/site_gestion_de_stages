<?php
	
	include("header.php");
	include("db_config.php");

	
	if (!($_POST["nom"]) || !($_POST["prenom"]))
	{
	echo "Certains champs ont ete mal renseignes<br/><br/>";
	echo "<a href='etu_envoi_form.php'></br></br>Retourner le formulaire</a>";
	include "footer.php";
	exit ();
	}

	$nom = mysql_real_escape_string($_POST["nom"]);
	$prenom = mysql_real_escape_string($_POST["prenom"]);
	$did=mysql_real_escape_string($_POST['demande']); 

	$SQL = "SELECT * FROM demandes WHERE did='$did' ";
	$res = mysql_query($SQL);

	if (!$res) die('Error: ' . mysql_error());
	$row=(mysql_fetch_array($res));

	if ($res && mysql_num_rows($res)>0)
	{
	echo "Ce stage a deja ete ajouté !<br/><br/>";
	echo "<a href='etu_envoi_form.php'>Retourner sur le formulaire</a>";
	include "footer.php";
	exit ();
	}

	else
		
		{
			$SQL2 = "INSERT INTO demandes VALUES ('$did','$eid','$eeid','$sid','$statut')";
			$res2 = mysql_query($SQL2);
			if (!$res2) die('Error: ' . mysql_error());
			else echo "La demande a bien été envoyer";
		}

	echo "<a href='etudiants.php'></br></br>Retourner sur la liste</a>";

	include("footer.php");
?>
