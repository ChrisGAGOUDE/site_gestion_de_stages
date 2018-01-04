<?php
	include("header.php");

	include("db_config.php");

	//Traitement pour la liste des étudiants
	$SQL='SELECT * FROM etudiants';
	$res = mysql_query($SQL);

	echo"<form action='ajout_etu.php' method='post'>";
	echo"<table border=1px>";
	while($row = mysql_fetch_array($res))
	{
		echo "<tr><td>$row[eid]</td><td>$row[nom]</td><td>$row[prenom]</td><td>$row[email]</td><td>$row[fid]</td><td><a href='sup_etu.php'>Supprimer</a></td></tr>";
	}
	echo"<input type='submit' value='Ajouter un etudiant a la liste'>";
	echo"</table>";
	echo"</form>";

	echo"<br />";
	
	//Traitement pour la liste des entreprises
	$SQL2="SELECT * FROM entreprises";
	$res2 = mysql_query($SQL2);

	echo"<form action='ajout_entreprises.php' method='post'>";
	echo"<table border=1px>";
	while($row = mysql_fetch_array($res2))
	{
		echo "<tr><td>$row[eeid]</td><td>$row[nom]</td><td>$row[nomC]</td><td>$row[prenomC]</td><td>$row[emailC]</td><td>$row[telC]</td></tr>";
	}
	echo"<input type='submit' value='Ajouter une entreprise a la liste'>";
	echo"</table>";
	echo"</form>";

	echo"<br />";
	
	//Traitement pour la liste des filieres
	if(!isset($_POST['fid']))
	{
 	 include("filieres_form.php");
	} else{
 		$fid = mysql_real_escape_string($_POST['fid']);
 		$SQL3="SELECT * FROM etudiants WHERE fid='$fid'";
		$res3 = mysql_query($SQL3);
  
 		if (!$res3 || mysql_num_rows($res3)==0){
   		echo "<p> Pas de resultats</p>";
 		}else {
    			echo "<table border=1px>";
			while ($row=mysql_fetch_array($res3)){
			echo "<tr><td>$row[nom]</td><td>$row[prenom]</td></tr>";
			}
			echo "</table>";
	 	      } 
       	     }
	//Traitement pour ajouter une filiere
	$SQL4="SELECT * FROM filieres";
	$res4 = mysql_query($SQL4);

	echo"<form action='filieres_ajout_form.php' method='post'>";
	
	echo"<input type='submit' value='Ajouter une filiere à la liste'>";
	echo"</form>";	

	include("footer.php");
?>

