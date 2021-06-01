<?
include("verifsess.php");			// commande chequier

if(!$type)
	$erreur.="type de chequier, ";
if(!$envoyer)
	$erreur.="Envoie, ";
if($erreur)
	{
	header("Location: formcheq.php?msg=Les champs suiant sont obligatoire $erreur");
	exit();
	}

			// enregistre la commande de chequier
mysql_select_db ($namedb);		
$sql = "INSERT INTO `$cheque` (`client`, `date`,`type`, `envoie`)";
$sql.=" VALUES ('$auth', '".date("d / m / Y")."','$type', '$envoyer')"; 
ExeSql($sql);
header("Location: formcheq.php?msgok=Commande effectuee.");

?>