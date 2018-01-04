<?php

include("header.php");
?>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	-->
<strong><u>Projet 1: Gestion de stage </u></strong><br /><br />
Le but de ce projet est de creer un site qui permet la gestion des stages dans le cadre de l universite. Les
stages sont deposes par les entreprises et peuvent etre consultes par les etudiants (de plusieurs filieres). Les
entreprises peuvent modifier, ajouter ou supprimer ses offres de stages. Les étudiants peuvent consulter
les offres qui, par ailleurs, sont reparties en plusieurs categories specifiques aux filieres dans lesquelles
se trouvent les etudiants. Une fois l’offre choisi par l’etudiant (ou plusieurs etudiants), l’entreprise peut
accepter ou refuser cet etudiant. En cas d’acceptation, l’offre ne peut plus etre affecte à un autre étudiant
et ne doit plus apparaitre dans la liste des offres.<br />
Le site etant un site avec pre-modération, il y a un Responsable (administrateur) qui enregistrera les
etudiants et les entreprises.<br />
<strong>Details</strong><br />
À faire :<br />
– Pour le responsable :<br />
– (*) Enregistrer les étudiants/entreprises.<br />
– Ajout/suppression/modification de la liste des filières/categories de stage.<br />
– (*) Liste des entreprises/étudiants (par filière).<br />
– Recherche des étudiants/entreprises.<br />
– (*) Liste des stages non-affectés ou étudiants sans stage (par filière).<br />
– Pour les entreprises :<br />
– (*) Ajout/modification des offres de stage.<br />
– Suppression des offres de stage.<br />
– (*) Gestion des demandes de stage (liste, acceptation,refus).<br />
– Pour les étudiants :<br />
– (*) Voir la liste des stages de la filière correspondante (par catégorie).<br />
– (*) Envoi d’une demande de stage.<br />
– Suivi de la demande (refus ou acceptation).<br />

<?php
include("footer.php");
?>
