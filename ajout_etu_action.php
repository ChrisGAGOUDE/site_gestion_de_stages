<?php
	
	include("header.php");
	include("db_config.php");

	/*$conn = mysql_connect($DB_host, $DB_login, $DB_pass); 
 	$db = mysql_select_db($DB_select, $conn);
 	if (!$conn || !$db) die('Could not connect: ' . mysql_error()); 
*/
	if (!($_POST["nom"]) || !($_POST["prenom"]))
	{
	echo "Certains champs ont ete mal renseignes<br/><br/>";
	echo "<a href='ajout_etu.php'></br></br>Retourner le formulaire</a>";
	include "footer.php";
	exit ();
	}

	$nom = mysql_real_escape_string($_POST["nom"]);
	$prenom = mysql_real_escape_string($_POST["prenom"]);
	$fid=mysql_real_escape_string($_POST['filiere']); 

	$SQL = "SELECT * FROM etudiants WHERE nom='$nom' ";
	$res = mysql_query($SQL);

	if (!$res) die('Error: ' . mysql_error());
	$row=(mysql_fetch_array($res));

	if ($res && mysql_num_rows($res)>0)
	{
	echo "Cet etudiant a deja ete ajoute !<br/><br/>";
	echo "<a href='ajout_etu.php'>Retourner sur le formulaire</a>";
	include "footer.php";
	exit ();
	}

	else
		
		{
			$SQL2 = "INSERT INTO etudiants VALUES ('$eid','$nom','$prenom','$email','$fid')";
			$res2 = mysql_query($SQL2);
			if (!$res2) die('Error: ' . mysql_error());
			else echo "L'etudiant a bien ete ajoute";
		}

	echo "<a href='responsables.php'></br></br>Retourner sur la liste</a>";

	include("footer.php");
?>
