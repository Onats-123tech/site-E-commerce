<?
		// Permet de changer le mot de passe
include ("verifsess.php");
?>

<strong></strong> 
<form action="dcheque.php" method="get" name="cheque">
  <table width="766" border="0" cellpadding="1" cellspacing="1">
    <!--DWLayoutTable-->
    <tr> 
      <td width="1" height="42"></td>
      <td width="1">&nbsp;</td>
      <td colspan="6" valign="top"><strong><font color="#000099" size="6" face="Verdana, Arial, Helvetica, sans-serif">...</font><font color="#0000FF" face="Verdana, Arial, Helvetica, sans-serif"> 
        <font color="#000099">Commande de ch&eacute;quier</font> <font color="#FF0000" size="4">&gt;&gt; 
        </font></font></strong></td>
      <td width="70">&nbsp;</td>
      <td width="17">&nbsp;</td>
      <td width="8">&nbsp;</td>
      <td width="292">&nbsp;</td>
    </tr>
    <tr> 
      <td height="21"></td>
      <td></td>
      <td colspan="10" valign="top"><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
        <?
	  echo $msg;
	  ?>
        </strong></font></td>
    </tr>
    <tr> 
      <td height="20" colspan="12" valign="top" bgcolor="#003399"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Choisissez 
          le type de ch&eacute;quier </strong></font></div></td>
    </tr>
    <tr> 
      <td height="38" colspan="3" valign="top" bgcolor="#3399CC"><!--DWLayoutEmptyCell-->&nbsp; 
      <td colspan="2" valign="top" bgcolor="#3399CC"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Type</strong></font></div>
      <td colspan="2" valign="top" bgcolor="#3399CC"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nombre<br>
          de ch&egrave;ques </strong></font></div>
      <td colspan="4" valign="top" bgcolor="#3399CC"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Taille<br>
          L x h en cm </strong></font></div>
      <td valign="top" bgcolor="#3399CC"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Format 
          </strong> </font></div></tr>
    <tr> 
      <td height="24" colspan="3" valign="top" bgcolor="#99CCCC"><input type="radio" name="type" value="Souche"> 
      <td colspan="2" valign="top" bgcolor="#99CCCC"><font color="#3300CC">Souche 
        lat&eacute;rale </font> 
      <td colspan="2" valign="top" bgcolor="#99CCCC"><div align="center"><font color="#3300CC">33 
          </font></div>
      <td colspan="4" valign="top" bgcolor="#99CCCC"><div align="center"><font color="#3300CC">21,5 
          x 8,0</font></div>
      <td valign="top" bgcolor="#99CCCC"><div align="center"><img src="images/Souche-laterale-EL33-s.jpg" width="48" height="17"></div></tr>
    <tr> 
      <td height="24" colspan="3" valign="top" bgcolor="#99CCCC"> <input type="radio" name="type" value="Portefeuille"> 
      <td colspan="2" valign="top" bgcolor="#99CCCC"> <font color="#3300CC">Portefeuille 
        </font> 
      <td colspan="2" valign="top" bgcolor="#99CCCC"> <div align="center"><font color="#3300CC">33</font></div>
      <td colspan="4" valign="top" bgcolor="#99CCCC"> <div align="center"><font color="#3300CC">17,5 
          x 9,9 </font></div>
      <td valign="top" bgcolor="#99CCCC"> <div align="center"><img src="images/Portefeuille-EF33-s.jpg" width="41" height="22"></div></tr>
    <tr> 
      <td height="24" colspan="3" valign="top" bgcolor="#99CCCC"> <input type="radio" name="type" value="Talon"> 
      <td colspan="2" valign="top" bgcolor="#99CCCC"> <font color="#3300CC">Talon 
        lat&eacute;ral </font> 
      <td colspan="2" valign="top" bgcolor="#99CCCC"> <div align="center"><font color="#3300CC">50 
          </font></div>
      <td colspan="4" valign="top" bgcolor="#99CCCC"> <div align="center"><font color="#3300CC">21,5 
          x 9,9 </font></div>
      <td valign="top" bgcolor="#99CCCC"><div align="center"><img src="images/Talon-lateral-EC50-s.jpg" width="48" height="21"> 
        </div></tr>
    <tr> 
      <td height="11"> 
      <td> 
      <td width="20"> 
      <td width="10"> 
      <td width="120"> 
      <td width="9"> 
      <td width="172"> 
      <td width="9"> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="20" colspan="12" valign="top" bgcolor="#000099"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Choisissez 
          o&ugrave; l'envoyer </strong></font></div></tr>
    <tr> 
      <td height="13"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="1"> 
      <td> 
      <td rowspan="2" valign="top"><input type="radio" name="envoyer" value="agence"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="15"> 
      <td> 
      <td> 
      <td colspan="2" rowspan="2" valign="top"> <font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">A 
        votre agence </font> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="3"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="2"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="2"> 
      <td> 
      <td rowspan="2" valign="top"><input type="radio" name="envoyer" value="domicile"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="14"> 
      <td> 
      <td> 
      <td colspan="4" rowspan="2" valign="top"> <font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">A 
        votre domicile en recommand&eacute; (&agrave; vos frais) </font> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="3"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="8"> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td> 
      <td>
      <td>
      <td></tr>
    <tr> 
      <td height="24" colspan="9" valign="top"> <div align="right"> 
          <input type="image" src="images/bouton_valider.gif" width="93" height="22" border="0" alt="Valider">
        </div>
      <td>&nbsp;
      <td colspan="2" valign="top"><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><?
	  echo $msgok;
	  ?></strong></font>
      </tr>
    <tr> 
      <td height="38"> 
      <td colspan="11" valign="top"> <font color=#FF0000 size=6><strong><font color=#000099>...................</font>.<font color=#000099>....</font>..<font color=#000099>..........</font>....<font color=#000099>...</font></strong></font></tr>
    <tr> 
      <td height="300"> 
      <td colspan="11" valign="top"><div align="center"><img src="images/logo/10planetebank%20copier.jpg" width="211" height="299" align="middle"></div></tr>
  </table>
</form>


