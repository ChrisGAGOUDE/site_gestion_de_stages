<?php 

	include("header.php");
	include("db_config.php");

	

	if (!($_POST["nom"]))
	{
	echo "Vous n'avez pas encore renseigne le nom de la filiere<br/><br/>";
	echo "<a href='filieres_ajout_form.php'></br></br>Retourner le formulaire</a>";
	include "footer.php";
	exit ();
	}

	$nom = mysql_real_escape_string($_POST["nom"]);

	$SQL = "SELECT * FROM filieres WHERE nom='$nom' ";
	$res = mysql_query($SQL);

	if (!$res) die('Error: ' . mysql_error());
	$row=(mysql_fetch_array($res));

	if ($res && mysql_num_rows($res)>0)
	{
	echo "Cette filiere a deja ete ajoutee !<br/><br/>";
	echo "<a href='filieres_ajout_form.php'>Retourner sur le formulaire</a>";
	include "footer.php";
	exit ();
	}

	else
		
		{
			$SQL2 = "INSERT INTO filieres VALUES ('$fid','$nom')";
			$res2 = mysql_query($SQL2);
			if (!$res2) die('Error: ' . mysql_error());
			else echo "La filiere a bien ete ajoutee";
		}

	echo "<a href='responsables.php'></br></br>Retourner sur la liste</a>";

	include("footer.php");
?>
	
	


