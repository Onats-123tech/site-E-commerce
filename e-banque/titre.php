<?
include ("verifsess.php");

mysql_select_db ($namedb);

$sql = "SELECT nom,prenom FROM $table WHERE ident = '$auth' and passwd = '$passwd'";
		// execute requette SQL et renvoie un index
$ret=mysql_query ($sql);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#0099CC">
<table width="759" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr> 
    <td width="297" height="30"></td>
    <td width="54">&nbsp;</td>
    <td width="139" rowspan="2" valign="top"><font color="#FF0000" size="6"><strong><em>e-Banque</em></strong></font></td>
    <td width="235">&nbsp;</td>
    <td width="34">&nbsp;</td>
  </tr>
  <tr> 
    <td rowspan="3" valign="top"> 
      <?
	$client=mysql_fetch_array($ret);
	$prenom=$client['prenom'];
	$nom=$client['nom'];
	echo '<p><font color="#FFFFFF" size="-1"><strong>Bienvenue ';
	echo "Mr </strong>$nom <em>$prenom</em></font></p>";
	?>
    </td>
    <td height="6"></td>
    <td rowspan="2" valign="top"><strong><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Vos 
      Operation en ligne</font></strong></td>
    <td></td>
  </tr>
  <tr> 
    <td height="12"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="0"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
