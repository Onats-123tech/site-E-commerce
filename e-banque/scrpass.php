<?
include("verifsess.php");

if(!$ancien)		// verifie les champs textes
	$erreur.="Ancien mot de passe, ";
if(!$new)
	$erreur.="Nouveau mot de passe, ";
if(!$newc)
	$erreur.="Verification mot de passe, ";
if($erreur)
	{
	header("Location: chpass.php?msg=les champs suivants sont obligatoire : $erreur");
	exit();
	}
if(strlen($new)<4)		// mot de passe minumum 4 lettres
	$erreur.="Votre nouveau mot de passe doit impérativement être composé de 4 caractères, ";
if($new!=$newc)
	$erreur.="Mauvaise confirmation, ";
if($erreur)
	{
	header("Location: chpass.php?msg=$erreur");
	exit();
	}

if($idclient=rechpass($ancien,$auth))
	{
	changepass($idclient,$new);
	$passwd=$new;
	header("Location: chpass.php?msg=Mise à jour du mot de passe effectue et réussite");
	}
else
	header("Location: chpass.php?msg=Mauvais Mot de passe");


?>