<?
		// affiche les solde & mouvement de la table compte
include ("verifsess.php");
?>

<strong></strong> 
<table width="834" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="6" height="42"></td>
    <td width="15"></td>
    <td width="257" valign="top"><strong><font color="#000099" size="6" face="Verdana, Arial, Helvetica, sans-serif">...</font><font color="#0000FF" face="Verdana, Arial, Helvetica, sans-serif"> 
      <font color="#000099">Situation financi&egrave;re</font><font color="#FF0000" size="4"> 
      &gt;&gt; </font></font></strong></td>
    <td width="428"></td>
    <td width="102"></td>
    <td width="1"></td>
    <td width="25"></td>
  </tr>
  <tr> 
    <td height="25"></td>
    <td></td>
    <td></td>
    <td></td>
    <td valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Imprimer</strong></font> 
      <strong><font color="#FF0000" size="3" face="Verdana, Arial, Helvetica, sans-serif">&gt;&gt;</font></strong></td>
    <td>&nbsp;</td>
    <td valign="top"> <a href="imprime.php?idprint=1" target="_blank"><img src="images/icoimpr.gif" width="18" height="17"  border="0" alt="Imprimer"></a></td>
  </tr>
  <tr> 
    <td height="18"></td>
    <td colspan="6" valign="top"> 
      <?
			// va lire l historique du compte correspondant a la demande
mysql_select_db ($namedb);
$sql = "SELECT * FROM $table,$compte WHERE ident = '$auth' and passwd = '$passwd' and $compte.ID_client=$table.ID_client";
$ret=ExeSql($sql);

$fond="#99CCFF";		// calcul couleur pour le tableau
$col=hexdec($fond);
$ho=$col+hexdec("1100");
$ba=$col-hexdec("0011");

echo "<table>";							// haut du grand tableau (informations optionnel) 
echo "<tr bgcolor=#000099 ><font color=#FFFFFF>";
echo "<strong><div align=center>Relevé de votre situation";
echo " financière à ce jour, le ";
echo date("d / m / Y");
echo "</div></strong></font></tr>";

echo "<tr bgcolor=#99CCFF> <td width=450> </td><td width=80> <div align=center> Debit </div></td><td width=120> <div align=center> ";
echo "Credit </div></td><td width=180><div align=center> Pour Information </div></td></tr>";
echo "<tr bgcolor=#000099> <td><font color=#FFFFFF><strong> e-Banque PARIS<strong></font> </td><td></td><td></td><td></td></tr>";
				// affiche chaque ligne de la table operation au format du tableau
			// affiche l'historique

while($client=mysql_fetch_array($ret))
	{
    $nom=$client['nom'];			// recolte les informations
	$prenom=$client['prenom'];
	$nom_compte=$client['nom_compte'];
	$num_compte=$client['num_compte'];
	$solde=$client['SOLDE'];
	$idcompte=$client['ID_compte'];
	$info=$solde*$euro;
	
	if ($j%2==0)			// si j paire
        {
		echo "<tr bgcolor=#".sprintf("%06s",dechex($ho)).">";
		}
    else					// si j impaire
        {
		echo "<tr bgcolor=#".sprintf("%06s",dechex($ba)).">";
		}
	
	$j++; 			// affiche ces diff information au format tableau	
	echo "<td>&nbsp;<a href=operat.php?idcompte=$idcompte&solde=$solde&num_compte=$num_compte&nom=$nom&prenom=$prenom&nom_compte=$nom_compte>";
	echo " $num_compte  0$j $nom_compte  Mr $nom $prenom </a></td>";
	echo "<td><div align=right> </div></td><td><div align=right> + $solde   EUR  </div></td><td>";
	echo "<div align=right> <em>+ $info FRF </em>  </div></td></tr> ";
    
	}

echo "</table>";

?>
    </td>
  </tr>
  <tr> 
    <td height="37"></td>
    <td colspan="6" valign="top"> <font color=#FF0000 size=6><strong><font color=#000099>...................</font>.<font color=#000099>....</font>..<font color=#000099>..........</font>....<font color=#000099>...</font></strong></font></td>
  </tr>
  <tr> 
    <td height="299"></td>
    <td colspan="6" valign="top"><div align="center"><img src="images/logo/10planetebank%20copier.jpg" width="211" height="299" align="middle"></div></td>
  </tr>
  <tr> 
    <td height="28"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>



