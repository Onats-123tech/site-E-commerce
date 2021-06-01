<?
include("connexion.inc.php");

if(!$nom)				// verifie l etat de chaque champs
	$erreur.=" Nom,";
if(!$prenom)
	$erreur.=" Prenom,";
if(!$ville)
	$erreur.=" Ville,";
if(!$tel)
	$erreur.=" Telephone,";
if(!$date)
	$erreur.=" date de naissance,";
if(!$sexe)
	$erreur.=" sexe,";
	
if($erreur)		// renvoie au formulaire d inscription avec code d erreur
	{
	$msg="Les champs suivants sont obligatoire :".$erreur;
	header("Location: forminscrt.php?erreur=$msg&nom=$nom&prenom=$prenom&ville=$ville&tel=$tel&date=$date&adresse=$adresse&email=$email&travail=$travail&salaire=$salaire");
	}
else
	{
				// enregistre la demande d'inscription
	mysql_select_db ($namedb);		
	$sql = "INSERT INTO `$formulaire` (`nom`, `prenom`, ";
	$sql.="`daten`, `adresse`, `telephone`,`travail`,`salaire`,`email`,`sexe`,`ville`)";
	$sql.=" VALUES ('$nom', '$prenom','$date', '$adresse', '$tel', '$travail','$salaire','$email','$sexe','$ville')"; 
	ExeSql($sql);
	}

?>
<body bgcolor="#FFFFDD">
<table width="978" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="978" height="95">&nbsp;</td>
  </tr>
  <tr> 
    <td height="24" valign="top"><div align="center"><font color="#FF0000" size="4" face="Verdana, Arial, Helvetica, sans-serif">Inscription 
        Enregistree</font></div></td>
  </tr>
  <tr> 
    <td height="18"></td>
  </tr>
  <tr> 
    <td height="18" valign="top"><div align="center"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Un 
        commercial e-Banque va vous contacter pour cree un contrat dans moin de 
        24h.</font></div></td>
  </tr>
  <tr> 
    <td height="23">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" valign="top"><a href="index.php"><div align="center">retour a la page d'acceuil</div></a></td>
    </tr>
  <tr>
    <td height="228">&nbsp;</td>
  </tr>
</table>
