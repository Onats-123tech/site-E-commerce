<?
		// effectue des virement externe
include ("verifsess.php");
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- 
function resetForm() {
	document.saisie.montant.value = ""
	document.saisie.libdebit.value = ""
 	document.saisie.libcredit.value = ""
	document.saisie.debit.value = ""
 	document.saisie.credit.value = ""
	}
// -->
</script>
<body bgcolor="#FFFFFF">
<div align="center"><strong></strong></div>
<table width="825" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="22" colspan="14" valign="top"><div align="center"><strong><font color="#000099" size="+1" face="Verdana, Arial, Helvetica, sans-serif">Virements 
        externes entre vos comptes</font></strong></div></td>
    <td width="13"></td>
  </tr>
  <tr> 
    <td width="3" height="22">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td width="372">&nbsp;</td>
    <td width="90">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="19">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td></td>
  </tr>
  <tr> 
    <td height="40"></td>
    <td></td>
    <td></td>
    <td colspan="9" valign="top"><font color="#CC0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Pour 
      faire un virement externes entre vos comptes, vous n'avez qu'&agrave; selectionner 
      le compte &agrave; d&eacute;biter dans le menu deroulant, puis entrer le 
      numero de compte de celui &agrave; cr&eacute;diter . </strong></font></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="34"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="18"></td>
    <td colspan="13" valign="top"> 
      <?
	mysql_select_db ($namedb);
		// requette SQL lit le login et le pass de l utilisateur ds la base
	$sql = "SELECT * FROM $table,$compte WHERE ident = '$auth' and passwd = '$passwd' and $compte.ID_client=$table.ID_client";
			// execute requette SQL et renvoie un index
	$ret=ExeSql($sql);
	
	$fond="#99CCFF";
	$col=hexdec($fond);
	$ho=$col+hexdec("1100");
	$ba=$col-hexdec("0011");
	
	echo "<table>";
	echo "<tr bgcolor=#000099 ><font color=#FFFFFF>";
	echo "<strong><div align=center>Relevé de votre situation";
	echo " financière à ce jour, le ";
	echo date("d / m / Y");
	echo "</div></strong></font></tr>";
	
	echo "<tr bgcolor=#99CCFF> <td width=450> </td><td width=80> <div align=center> Etat </div></td><td width=120> <div align=center> ";
	echo "Credit </div></td><td width=180><div align=center> Pour Information </div></td></tr>";
	echo "<tr bgcolor=#000099> <td><font color=#FFFFFF><strong> e-Banque PARIS<strong></font> </td><td></td><td></td><td></td></tr>";
	
	while($client=mysql_fetch_array($ret))
		{
		$nom=$client['nom'];
		$prenom=$client['prenom'];
		$nom_compte=$client['nom_compte'];
		$num_compte=$client['num_compte'];
		$solde=$client['SOLDE'];
		$idcompte=$client['ID_compte'];
		$info=$solde*$euro;
		$etat=bloquer($idcompte);
		
		if ($j%2==0)
			{
			echo "<tr bgcolor=#".sprintf("%06s",dechex($ho)).">";
			}
		else
			{
			echo "<tr bgcolor=#".sprintf("%06s",dechex($ba)).">";
			}
		$j++;
		echo "<td>&nbsp;<a href=operat.php?idcompte=$idcompte&solde=$solde&num_compte=$num_compte&nom=$nom&prenom=$prenom&nom_compte=$nom_compte>";
		echo " $num_compte  0$j $nom_compte  Mr $nom $prenom </a></td>";
		echo "<td><div align=center> $etat </div></td><td><div align=right> + $solde   EUR  </div></td><td>";
		echo "<div align=right> <em>+ $info FRF </em>  </div></td></tr> ";
		
		}
	echo "</table>";
	?>
    </td>
    <td></td>
  </tr>
  <tr> 
    <td height="19"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr> 
    <td height="19"></td>
    <td colspan="13" valign="top"><font color="#CC0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp; 
      <?
	  echo $virement;	  
	  ?>
      </strong></font></td>
    <td></td>
  </tr>
  <tr> 
    <td height="7"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="24" colspan="14" valign="top"><HR WIDTH=250></td>
    <td></td>
  </tr>
  <tr> 
    <td height="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <form name="saisie" action="effvirext.php" method="get">
    <tr> 
      <td height="24"></td>
      <td colspan="4" valign="top"><div align="right"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Compte 
          &agrave; d&eacute;biter :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="5" valign="top"><select name="debit">
          <option value="" selected>Compte à débiter</option>
          <option value="">----------------------------------------</option>
          <?
		$sql = "SELECT * FROM $table,$compte WHERE ident = '$auth' and passwd = '$passwd' and $compte.ID_client=$table.ID_client";
			// execute requette SQL et renvoie un index
		$ret=mysql_query ($sql);
		while($client=mysql_fetch_array($ret))
			{
			$n++;
			$nom_compte=$client['nom_compte'];
			$num_compte=$client['num_compte'];
			$idcompte=$client['ID_compte'];
			echo "<option value=$idcompte > 0$n $num_compte $nom_compte</option>";			
			}
		?>
        <option value="">----------------------------------------</option>
		</select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="19"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="24"></td>
      <td colspan="4" valign="top"><div align="right"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Compte 
          &agrave; cr&eacute;diter : </font></div></td>
      <td>&nbsp;</td>
      <td colspan="5" valign="top"><input type="text" name="credit"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="16"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="32"></td>
      <td colspan="4" valign="top"><div align="right"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Saisissez 
          le montant du virement :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top"><input type="text" name="montant"> <font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>EUR</strong></font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="23"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="32"></td>
      <td colspan="4" valign="top"><div align="right"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Saisissez 
          le libell&eacute; du virement pour le compte d&eacute;bit&eacute; :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><input type="text" name="libdebit" maxlength="25" size="26"></td>
      <td colspan="4" valign="top"><strong><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">(optionnel)</font></strong></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="22"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="32"></td>
      <td colspan="4" valign="top"><div align="right"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Saisissez 
          le libell&eacute; du virement pour le compte cr&eacute;dit&eacute; :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><input type="text" name="libcredit" maxlength="25" size="26"></td>
      <td colspan="4" valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>(optionnel)</strong></font></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="24"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="28"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top"><input name="imageField" type="image" src="images/bouton_eff_vir.gif" width="168" height="28" border="0" alt="Effectuer le virement"></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="28"></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><a href="javascript:resetForm()"><img src="images/bouton_effacer_saisie.gif" border="0" alt="Effacer la saisie"></a></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="9"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="22"></td>
      <td></td>
      <td colspan="13" valign="top"><HR WIDTH=250></td>
    </tr>
    <tr> 
      <td height="7"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </form>
</table>
