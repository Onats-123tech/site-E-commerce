<?
		// affiche l'historique d'un compte
include ("verifsess.php");
?>
<table width="833" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="7" height="42"></td>
    <td width="13"></td>
    <td width="254" valign="top"><strong><font color="#000099" size="6" face="Verdana, Arial, Helvetica, sans-serif">...</font><font color="#0000FF" face="Verdana, Arial, Helvetica, sans-serif"> 
      <font color="#000099">Situation financi&egrave;re</font><font color="#FF0000" size="4"> 
      &gt;&gt;</font></font></strong></td>
    <td width="438"></td>
    <td width="98"></td>
    <td width="17"></td>
    <td width="6"></td>
  </tr>
  <tr> 
    <td height="21"></td>
    <td></td>
    <td></td>
    <td></td>
    <td valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Imprimer</strong></font> 
      <strong><font color="#FF0000" size="3" face="Verdana, Arial, Helvetica, sans-serif">&gt;&gt;</font></strong></td>
    <td valign="top"> 
      <?			// lien pour imprimer l'historique du compte
	echo "<a href=imprime.php?idcompte=$idcompte&solde=$solde&num_compte=$num_compte&nom=$nom&prenom=$prenom&nom_compte=$nom_compte target=_blank>";
	echo "<img src=images/icoimpr.gif border=0 width=18 height=17>";
	echo "</a>";
	?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="18"></td>
    <td colspan="6" valign="top"> 
      <?
				// va lire l historique du compte correspondant a la demande
mysql_select_db ($namedb);
$sql = "SELECT * FROM $hist WHERE ID_compte=$idcompte";
$ret=ExeSql($sql);

$info =$solde * $euro;
$fond="#99CCFF";		// calcul couleur pour le tableau
$col=hexdec($fond);
$ho=$col+hexdec("1100");
$ba=$col-hexdec("0011");

echo "<table>";							// haut du grand tableau (informations optionnel) 
echo "<tr bgcolor=#000099 ><font color=#FFFFFF>";
echo "<strong><div align=center>Dernières opérations";
echo "</div></strong></font></tr>";
echo "<tr bgcolor=#99EEFF><td width=850><div align=center> Sur le compte N° $num_compte $nom_compte Mr $nom $prenom</div></td></tr>";
echo "</table>";

echo "<table>";
echo "<tr bgcolor=#000099> <td><font color=#FFFFFF><strong>&nbsp;e-Banque PARIS<strong></font> </td><td></td><td></td><td></td></tr>";
echo "<tr bgcolor=#99EEFF> <td width=457><div align=right> financière à ce jour, le ";echo date("d / m / Y");
echo " &nbsp;</div></td><td width=110> </td><td width=110><div align=right> $solde EUR&nbsp;</div></td><td width=150>";
echo "<div align=right>$info FRF&nbsp;</div></td></tr>";
echo "</table>";

echo "<table>";
echo "<tr bgcolor=#000099><font color=#FFFFFF><strong>&nbsp;Vos Operation Courantes<strong></font></tr>";
echo "<tr bgcolor=#99BBFF> <td width=115><div align=center> Date Operation </div></td><td width=115><div align=center>  ";
echo "Date Valeur</div></td><td width=220> <div align=center>";
echo " Operation </div></td><td width=110> <div align=center> ";
echo "Debit </div></td><td width=110><div align=center> Credit </div></td><td width=150><div align=center>";
echo " Pour Information </div></td></tr>";
				// affiche chaque ligne de la table operation au format du tableau
			// affiche l'historique
if( !($client=mysql_fetch_array($ret)) )
	echo "</table><div align=center>Aucune Operation</div>";
else
	{
	do
		{
		$date=$client['date'];			// recolte les informations
		$datev=$client['datev'];
		$operat=$client['operation'];
		$debit=$client['debit'];
		$credit=$client['credit'];
		
		if($credit)					// pour la case information il faut savoir 
			$info=$credit*$euro;	// convertire le credit ou le debit
		if($debit)
			$info=$debit*$euro;
		
		if ($j%2==0)		// si j paire
			{
			echo "<tr bgcolor=#".sprintf("%06s",dechex($ho)).">";
			}
		else			// si j impaire
			{
			echo "<tr bgcolor=#".sprintf("%06s",dechex($ba)).">";
			}
		$j++;			// affiche ces diff information au format tableau
		echo "<td>$date </td><td>$datev </td><td>$operat</td>";
		echo "<td><div align=right> $debit EUR&nbsp;</div></td><td><div align=right> $credit EUR&nbsp;</div></td><td>";
		echo "<div align=right> $info FRF&nbsp;</div></td></tr>";
		
		}
	while($client=mysql_fetch_array($ret));
	}
echo "</table>";

?>
    </td>
  </tr>
  <tr> 
    <td height="36"></td>
    <td colspan="6" valign="top"> <font color=#FF0000 size=6><strong><font color=#000099>...................</font>.<font color=#000099>....</font>..<font color=#000099>..........</font>....<font color=#000099>...</font></strong></font> 
    </td>
  </tr>
  <tr>
    <td height="127"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
