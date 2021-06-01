<?
		// verifie si l identifiant et le pass en session
		// existe bien dans la base
include ("connexion.inc.php");
require("lib.inc.php");

session_start();
		// si renvoie 0 cest que l on a rien selectionner le nom n existe pas !!

if(!rechpass($passwd,$auth))
	{
	mysql_close($id);
	header("Location: erreur.php?erreur=2");	
	exit();
	}
?>