<?
		// Permet de changer le mot de passe
include ("verifsess.php");
?>

<strong></strong> 
<form action="scrpass.php" method="get">
  <table width="820" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr> 
      <td width="5" height="42"></td>
      <td width="14">&nbsp;</td>
      <td colspan="7" valign="top"><strong><font color="#000099" size="6" face="Verdana, Arial, Helvetica, sans-serif">...</font><font color="#0000FF" face="Verdana, Arial, Helvetica, sans-serif"> 
        <font color="#000099">Changement de mot de passe </font><font color="#FF0000" size="4">&gt;&gt; 
        </font></font></strong></td>
      <td width="367">&nbsp;</td>
      <td width="11">&nbsp;</td>
    </tr>
    <tr> 
      <td height="13"></td>
      <td></td>
      <td width="12"></td>
      <td width="110"></td>
      <td width="124"></td>
      <td width="24"></td>
      <td width="8"></td>
      <td width="84"></td>
      <td width="61"></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="11" valign="top" bgcolor="#003399"><div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><strong>Saisir 
          un nouveau mot de passe</strong></font></div></td>
    </tr>
    <tr> 
      <td height="48" colspan="11" valign="top" bgcolor="#3399CC"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Vous 
        pouvez modifier ici votre mot de passe. Votre nouveau mot de passe doit 
        impérativement être composé de 4 caract&egrave;res.Evitez de choisir un 
        mot de passe qui serait trop facile &agrave; retrouver, mais &eacute;vitez 
        aussi de noter votre mot de passe quelque part.</font></tr>
    <tr> 
      <td height="6"> 
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
      <td height="21">
      <td>
      <td colspan="8" valign="top"><p><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
          <?
	echo $msg;
	?>
          </strong></font></p>
      <td>&nbsp;</tr>
    <tr>
      <td height="7">
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
      <td height="21"></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Identifiant</strong></font></td>
      <td></td>
      <td colspan="2" valign="top">&nbsp;<font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#000099"><strong><em> 
        <?
	echo $auth;
	?>
        </em></strong></font></td>
      <td></td>
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
    </tr>
    <tr> 
      <td height="22"></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Ancien 
        mot de passe</font></td>
      <td></td>
      <td colspan="2" valign="top"><input type="text" name="ancien" AUTOCOMPLETE="off"></td>
      <td></td>
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
    </tr>
    <tr> 
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Saisissez 
        votre nouveau mot de passe </font></td>
      <td></td>
      <td colspan="2" valign="top"><input type="text" name="new" AUTOCOMPLETE="off"></td>
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
    </tr>
    <tr> 
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">V&eacute;rification 
        du nouveau mot de passe </font></td>
      <td></td>
      <td colspan="2" valign="top"><input type="text" name="newc" AUTOCOMPLETE="off"></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="26"></td>
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
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><input type="image" src="images/confirmer.gif" width="111" height="22" border="0" alt="Confirmer"></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="37"></td>
      <td colspan="10" valign="top"> <font color=#FF0000 size=6><strong><font color=#000099>...................</font>.<font color=#000099>....</font>..<font color=#000099>..........</font>....<font color=#000099>...</font></strong></font></td>
    </tr>
    <tr> 
      <td height="299"></td>
      <td colspan="10" valign="top"><div align="center"><img src="images/logo/10planetebank%20copier.jpg" width="211" height="299" align="middle"></div></td>
    </tr>
    <tr> 
      <td height="32"></td>
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
    </tr>
  </table>
</form>


