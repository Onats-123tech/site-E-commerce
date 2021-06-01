<html><!-- page formulaire d inscription -->
<head>
<title>Formulaire d'inscription e-banque</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFDD">
<form action="inscription.php" method="get">
			
  <table width="968" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr> 
      <td height="27" colspan="12" valign="top"><div align="center"><strong><font color="#FF0000" size="4" face="Verdana, Arial, Helvetica, sans-serif">Formulaire 
          d'inscription e-Banque</font></strong></div></td>
    </tr>
    <tr> 
      <td width="326" height="13"></td>
      <td width="73"></td>
      <td width="28"></td>
      <td width="37"></td>
      <td width="62"></td>
      <td width="82"></td>
      <td width="24"></td>
      <td width="19"></td>
      <td width="37"></td>
      <td width="9"></td>
      <td width="183"></td>
      <td width="88"></td>
    </tr>
    <tr> 
      <td height="18" colspan="12" valign="top"><p align="center"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif"><strong>Si 
          vous voulez effectuer une inscription a e-banque remplissez ce formulaire 
          . </strong></font></p></td>
    </tr>
    <tr> 
      <td height="54" colspan="12" valign="top"> <br> <p align="center"><strong><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Les 
          champs marqu&eacute;s d'une <font color="#FF0000">*</font> sont obligatoires.<font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"></font></strong></font></strong></p></td>
    </tr>
    <tr> 
      <td height="18"></td>
      <td colspan="8" valign="top"><p><font color="#000099" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <?					// si l on a oublier ou mal remplie un champs texte 
	  		echo "$erreur";		// inscription.php renvoie cette variable erreur contenant le code d erreur
	  		?>
          </font></strong></font></p></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="1"></td>
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
      <td height="21" colspan="12" valign="top"><HR WIDTH=250></td>
    </tr>
    <tr> 
      <td height="13"></td>
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
      <td height="22" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Nom 
          : </font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"> <input type="text" name="nom" maxlength="20" value=<? echo $nom;?>> 
        <font color="#FF0000">*</font> </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="21">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="22" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Prenom 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"> <input type="text" name="prenom" maxlength="20"  value=<? echo $prenom;?>> 
        <font color="#FF0000">*</font> </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="19">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="22" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Adresse 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"> <input type="text" name="adresse" maxlength="50" value=<? echo $adresse;?>> 
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="20">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="22" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Ville 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"> <input type="text" name="ville" maxlength="25" value=<? echo $ville;?> > 
        <font color="#FF0000">*</font> </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="21">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="24" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Date 
          de naissance :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"> <input type="text" name="date" maxlength="10" value=<? echo $date;?>> 
        <font color="#FF0000">*</font> </td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><font color="#000066" face="Verdana, Arial, Helvetica, sans-serif">format 
        : Jour/Mois/annee</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="19">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="22" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Telephone 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"> <input type="text" name="tel" maxlength="12" value=<? echo $tel;?>> 
        <font color="#FF0000">*</font> </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="25" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Travail 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"> <input type="text" name="travail" maxlength="25" value=<? echo $travail;?>> 
      </td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="18"></td>
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
      <td height="22" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Salaire 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"> <input type="text" name="salaire" maxlength="20" value=<? echo $salaire;?>> 
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="21">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="23" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">e-mail 
          :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"> <input type="text" name="email" maxlength="50" value=<? echo $email;?>> 
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="22">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="20" colspan="3" valign="top"><div align="right"><font color="#000099" face="Verdana, Arial, Helvetica, sans-serif">Vous 
          etes :</font></div></td>
      <td>&nbsp;</td>
      <td colspan="6" valign="top"> <input type="radio" name="sexe" value="m">
        un Homme 
        <input type="radio" name="sexe" value="f">
        une femme <font color="#FF0000">*</font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="26">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="22">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><input type="image" name="Envoyer" src="images/bouton_envoyer.gif" border="0" alt="Envoyer"></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="27">&nbsp;</td>
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
    </tr>
    <tr> 
      <td height="24" colspan="12" valign="top"><HR WIDTH=250></td>
    </tr>
  </table>
</form>
</body>
</html>
