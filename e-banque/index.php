<?
		// page d acceuil ==> identification du client ou demande d'inscription
		
session_start();		//soccupe de detruire toute session existante
session_destroy();
?>
 
<SCRIPT LANGUAGE="JavaScript">
<!--  remet a 0 les champs texte ident & pass
function resetForm() {
 	document.saisie.ident.value = ""
 	document.saisie.pass.value = ""	
	}
// -->
</script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>   --> e-Banque <-- </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF">

<form name="saisie" action="ident.php" method="get">
  <table width="966" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr> 
      <td width="1" height="55">&nbsp;</td>
      <td colspan="4" rowspan="7" valign="top"><img src="images/logo/10planetebank%20copier.jpg" width="211" height="299"></td>
      <td width="30">&nbsp;</td>
      <td width="16">&nbsp;</td>
      <td colspan="12" valign="top"><font color="#CC0000" size="+7" face="Verdana, Arial, Helvetica, sans-serif"><em><strong>e-Banque 
        </strong> </em></font></td>
      <td width="14">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="148">&nbsp;</td>
      <td width="14"></td>
      <td width="62"></td>
      <td width="19"></td>
      <td width="18"></td>
      <td width="19">&nbsp;</td>
    </tr>
    <tr> 
      <td height="55"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="30"></td>
      <td width="12"></td>
      <td width="11"></td>
      <td width="3"></td>
      <td width="8"></td>
      <td width="11"></td>
      <td width="27"></td>
      <td width="9"></td>
      <td colspan="11" valign="top"><font color="#CC0000" size="+7"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Banque 
        en ligne ...@@</font></font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="32"></td>
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
      <td width="60">&nbsp;</td>
      <td width="54">&nbsp;</td>
      <td width="13">&nbsp;</td>
      <td width="108">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="70"></td>
      <td>&nbsp;</td>
      <td colspan="6" rowspan="2" valign="top"><img src="images/ordi1.gif" width="78" height="78"></td>
      <td>&nbsp;</td>
      <td colspan="9" valign="top"> <div align="center"><font color="#000099" size="5" face="Verdana, Arial, Helvetica, sans-serif">Vous 
          &ecirc;tes sur le site de gestion des comptes par internet de <em>e-banque</em></font><br>
        </div></td>
      <td>&nbsp;</td>
      <td colspan="2" rowspan="2" valign="top"><img src="images/ordi2.gif" width="78" height="78"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="8"></td>
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
      <td height="58"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="21"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="8" valign="top"><HR WIDTH=250></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="23"></td>
      <td width="24"></td>
      <td colspan="22" valign="top"><p><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif">Si 
          vous &ecirc;tes client de <strong><em>e-banque</em></strong>, alors 
          vous pouvez acc&eacute;der &agrave; vos comptes en vous identifiant 
          directement depuis cette page :</font><font color="#000099" size="2"> 
          </font><font color="#000099"><br>
          </font></p></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="6"></td>
      <td></td>
      <td width="70"></td>
      <td width="99"></td>
      <td width="24"></td>
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
      <td></td>
      <td></td>
      <td colspan="6" rowspan="15" valign="top"><p><img src="images/logo/2E-B@nk.jpg" width="280" height="226"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
          </font> </p></td>
    </tr>
    <tr> 
      <td height="18"></td>
      <td></td>
      <td colspan="17" valign="top"><font color="#000099"> 
        <?php
		  if($erreur)		// ident nous renvoie un code d erreur
		  	{
			echo '<font color="red" face="Verdana, Arial, Helvetica, sans-serif" size="1">';
			echo "<strong>Votre identifiant est inconnu ou votre mot de passe est faux.</strong>";
			echo '</font><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif" size="1">';
			echo "<br>Recommencez en corrigeant votre identifiant ou votre mot de passe, ou contactez-nous.";
			echo '</font><br>&nbsp;<br>';	
			}
		  ?>
        </font></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="7" valign="top"><font size="2" color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Entrer 
        votre identifiant :</font></td>
      <td colspan="8" valign="top"><input type="text" name="ident" AUTOCOMPLETE="off"></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="1"></td>
      <td></td>
      <td></td>
      <td colspan="7" rowspan="3" valign="top"><font size="2" color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Entrer 
        votre mot de passe :</font></td>
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
      <td></td>
      <td colspan="8" valign="top"><input type="password" name="pass" AUTOCOMPLETE="off"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="2"></td>
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
      <td height="10"></td>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="12"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="12" valign="top"><A href="#" onMouseUp="window.open('info.htm', 'informations', 'scrollbars=no,resizable=no,width=400,height=450')"><font size="1" color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif">Note 
        aux utilisateurs d'Internet Explorer</font></a></td>
      <td></td>
      <td></td>
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
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td colspan="5" valign="top"><input type="image" name="Envoyer" src="images/bouton_envoyer.gif" border="0" alt="Envoyer"> 
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="5" valign="top"><a href="javascript:resetForm()"><img src="images/bouton_annuler.gif" border="0" alt="Effacer la saisie"></a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="11"></td>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="24"></td>
      <td></td>
      <td colspan="12" valign="top"><p><font size="1" color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Pour 
          tout renseignement, appelez le 0 609 523 781 ou par e-mail :<a href="mailto:e-banque@ort.asso.fr" > 
          e-banque@ort.asso.fr</a></font></p></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="21"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="10" valign="top"><HR WIDTH=250></td>
      <td></td>
    </tr>
    <tr> 
      <td height="29"></td>
      <td></td>
      <td></td>
      <td colspan="5" valign="top"><a href="forminscrt.php"><strong><font color="#FF0000" size="5" face="Georgia, Times New Roman, Times, serif"><em>INSCRIPTION</em></font></strong></a></td>
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
    </tr>
    <tr> 
      <td height="17"></td>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</form>
</body>
</html>
