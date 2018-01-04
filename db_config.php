<?php
   $DB_host     = "localhost";
   $DB_select   = "projet1_stages";
   $DB_login    = "root";
   $DB_pass     = "basketball";

	
	$conn = mysql_connect($DB_host,$DB_login,$DB_pass);		//Connexion à la base de données
	$db=mysql_select_db($DB_select,$conn);

	if(!$conn || !$db) 							// Vérification du résultat de l'appel
	{
		die('Erreur de connexion :'.mysql_error());
	}	

?>
