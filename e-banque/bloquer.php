<?
include("verifsess.php");
		// bloquer ou debloquer un compte

if($etat == "Bloque")
	$bloquer=0;		// code debloquer
if($etat == "Non")
	$bloquer=1;		// code bloquer
		// enregistrement des modification
						// mise a jour du nouveau etat bloquer / Non bloquer
mysql_select_db ($namedb);
$sql="update $compte set bloquer = '$bloquer' where ID_compte='$idcompte'";
ExeSql($sql);
header("Location: formbloque.php");
?>