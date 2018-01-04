<?php
	
	include("header.php");
	include("db_config.php");

	
	if (!($_POST["nom"]) || !($_POST["nomC"]) || !($_POST["prenomC"]))
	{
	echo "Certains champs ont ete mal renseignes<br/><br/>";
	echo "<a href='ajout_entreprises.php'></br></br>Retourner le formulaire</a>";
	include "footer.php";
	exit ();
	}

	$nom = mysql_real_escape_string($_POST["nom"]);
	$nomC = mysql_real_escape_string($_POST["nomC"]);
	$prenomC = mysql_real_escape_string($_POST["prenomC"]);
	$emailC=mysql_real_escape_string($_POST['emailC']);

	$SQL = "SELECT * FROM entreprises WHERE nom='$nom' ";
	$res = mysql_query($SQL);

	if (!$res) die('Error: ' . mysql_error());
	$row=(mysql_fetch_array($res));

	if ($res && mysql_num_rows($res)>0)
	{
	echo "Cette entreprise a deja ete ajoutee !<br/><br/>";
	echo "<a href='ajout_entreprises.php'>Retourner sur le formulaire</a>";
	include "footer.php";
	exit ();
	}

	else
		
		{
			$SQL2 = "INSERT INTO entreprises VALUES ('$eeid','$nom','$nomC', '$prenomC','$emailC','$telC')";
			$res2 = mysql_query($SQL2);
			if (!$res2) die('Error: ' . mysql_error());
			else echo "L'entreprise a bien ete ajoute";
		}

	echo "<a href='responsables.php'></br></br>Retourner sur la liste</a>";

	include("footer.php");
?>
