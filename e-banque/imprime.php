<?
include ("verifsess.php");
// imprime a l ecran un tableau au format pret a etre imprime
?>
<table width="968" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="384" height="11"></td>
    <td width="129"></td>
    <td width="455"></td>
  </tr>
  <tr> 
    <td height="23" colspan="2" valign="top"><p><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>RELEVE 
        ET INFORMATIONS BANCAIRES <em>e-Banque</em></strong></font></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="2"></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="18" valign="top"> 
      <?
		echo date("d / m / Y");
		if(!$idprint)		// si imprime historique ou solde laffichage de lentete est 
			{				// legerement differente
			echo "<br>Compte Client&nbsp;&nbsp;&nbsp;&nbsp;N° $num_compte $nom_compte";
			echo "<br>TITULAIRE(S) : &nbsp;MR $prenom $nom";
			}
	   ?>
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="27">&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="18" colspan="3" valign="top"> 
      <?
mysql_select_db ($namedb);

if(!$idprint)
	{				// va lire l historique du compte correspondant a la demande
	$sql = "SELECT * FROM $hist WHERE ID_compte=$idcompte";
	$ret=ExeSql($sql);

	$info =$solde * $euro;
				// haut du grand tableau (informations optionnel) 
	echo "<table border=1 ellpadding=0 cellspacing=0 bordercolordark=#CCCCCC bordercolorlight=#CCCCCC>";
	echo "<tr bgcolor=#FFFFFF><th  bordercolor=#CCCCCC COLSPAN=4 align=left> <font color=#666666 size=4 face=Verdana, Arial, Helvetica, sans-serif>";
	echo "<strong>&nbsp;e-Banque PARIS<strong></font> </th></tr>";
	echo "<tr bgcolor=#FFFFFF> <td bordercolor=#CCCCCC width=600><div align=right> financière à ce jour, le ";echo date("d / m / Y");
	echo " &nbsp;</div></td><td bordercolor=#CCCCCC width=110>&nbsp; </td><td bordercolor=#CCCCCC width=110>";
	echo "<div align=right> $solde EUR&nbsp;</div></td><td bordercolor=#CCCCCC width=150>";
	echo "<div align=right>$info FRF&nbsp;</div></td></tr>";
	echo "</table>";
	echo "<br>";

	echo "<table border=1 ellpadding=0 cellspacing=0 bordercolordark=#CCCCCC bordercolorlight=#CCCCCC>";
	echo "<tr bgcolor=#FFFFFF><th bordercolor=#CCCCCC COLSPAN=6 align=left><font color=#666666 size=4 face=Verdana, Arial, Helvetica, sans-serif>";
	echo "<strong>&nbsp;Vos Operation Courantes<strong></font></th></tr>";
	echo "<tr bgcolor=#FFFFFF> <td width=115><div align=center> Date Operation </div></td><td width=115><div align=center>  ";
	echo "Date Valeur</div></td><td width=350> <div align=center>";
	echo " Operation </div></td><td width=110> <div align=center> ";
	echo "Debit </div></td><td width=110><div align=center> Credit </div></td><td width=150><div align=center>";
	echo " Pour Information </div></td></tr>";
					// affiche chaque ligne de la table operation au format du tableau
					// affiche l'historique
	while($client=mysql_fetch_array($ret))
		{
		$date=$client['date'];		// recolte les informations
		$datev=$client['datev'];	// de la table operation
		$operat=$client['operation'];
		$debit=$client['debit'];
		$credit=$client['credit'];
		$j++;
		
		if($credit)					// pour la case information il faut savoir 
			$info=$credit*$euro;	// convertire le credit ou le debit
		if($debit)
			$info=$debit*$euro;
		
		echo "<tr bgcolor=#FFFFFF>";
		echo "<td>$date </td><td>$datev </td><td>$operat</td>";
		echo "<td><div align=right> $debit EUR&nbsp;</div></td><td><div align=right> $credit EUR&nbsp;</div></td><td>";
		echo "<div align=right> $info FRF&nbsp;</div></td></tr>";
		}
	
	echo "</table>";
	}
else
	{			// va lire la table compte correspondant au client
	$sql = "SELECT * FROM $table,$compte WHERE ident = '$auth' and passwd = '$passwd' and $compte.ID_client=$table.ID_client";
	$ret=mysql_query ($sql);
		
	echo "<table border=1 ellpadding=0 cellspacing=0 bordercolordark=#CCCCCC bordercolorlight=#CCCCCC>";
	echo "<tr bgcolor=#FFFFFF ><th bordercolor=#CCCCCC COLSPAN=6 align=left><font color=#666666 size=2 face=Verdana, Arial, Helvetica, sans-serif>";
	echo "<strong>&nbsp;Relevé de votre situation";
	echo " financière à ce jour, le ";
	echo date("d / m / Y");
	echo "</strong></font></th></tr>";
	
	echo "<tr bgcolor=#FFFFFF> <td bordercolor=#CCCCCC width=650>&nbsp; </td><td bordercolor=#CCCCCC width=80> ";
	echo "<div align=center> Debit </div></td><td bordercolor=#CCCCCC width=120> <div align=center> ";
	echo "Credit </div></td><td bordercolor=#CCCCCC width=180><div align=center> Pour Information </div></td></tr>";
	echo "<tr bgcolor=#FFFFFF> <td><font color=#666666><strong> &nbsp;e-Banque PARIS<strong></font>";
	echo "</td>&nbsp;<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
						// affiche chaque ligne de la table compte au format du tableau
						// affiche solde&mouvement 
	while($client=mysql_fetch_array($ret))
		{
		$nom=$client['nom'];			// recolte informations
		$prenom=$client['prenom'];
		$nom_compte=$client['nom_compte'];
		$num_compte=$client['num_compte'];
		$solde=$client['SOLDE'];
		$idcompte=$client['ID_compte'];
		$info=$solde*$euro;
		$j++;
		
		echo "<tr bgcolor=#FFFFFF>";		// affiche ces diff information au format tableau
		echo "<td><font color=#000000><a href=operat.php?idcompte=$idcompte&solde=$solde&num_compte=$num_compte&nom=$nom&prenom=$prenom&nom_compte=$nom_compte>";
		echo " $num_compte  0$j $nom_compte  Mr $nom $prenom </a></font></td>";
		echo "<td>&nbsp;</td><td><div align=right> + $solde   EUR  </div></td><td>";
		echo "<div align=right> <em>+ $info FRF </em>  </div></td></tr> ";
		}
		
	}
	
?>
    </td>
  </tr>

</table>
