<?
		// verifie si l'identifiant et le mot de passe font bien partie
		// de la base de donnee e-banque, en bref si l utilisateur 
		// appartient est bien inscrit chez e-banque
include "connexion.inc.php";
require("lib.inc.php");						
						// requette SQL lit le login et le pass de l utilisateur ds la base
mysql_select_db ($namedb);
$sql="SELECT nom FROM $table WHERE ident = '$ident' and passwd = '$pass'";
$ret=ExeSql($sql);
		
		// si renvoie 0 cest que l on a rien selectionner le nom n existe pas !!		
if(mysql_fetch_array($ret))
	{
	session_start();		// enregistre l'identifiant et le pass en session
	$auth=$ident;			// c.a.d en variable global pour aue le script verifsess.php
	$passwd=$pass;			// verifie selon ces variables session.
	session_register("auth");
	session_register("passwd");
	
	if (!((session_is_registered("auth"))&& (session_is_registered("passwd")) ))
		{
		echo "erreur session !!";
		exit();
		}
					// apres enregistrement on accede a lespace membre
	header("Location: membre.php");		
	exit();
	}
else
	{
	mysql_close($id);			// renvoie a page d acceuil avec le code d'erreur
 	header("Location: index.php?erreur=1");
	exit();
	}

?>

