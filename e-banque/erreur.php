<table width="961" border="0" cellpadding="0" cellspacing="0">
  <!-- erreur.php  -->
  <tr> 
    <td width="961" height="48">&nbsp;</td>
  </tr>
  <tr> 
    <td height="37" valign="top"><div align="center"><font color="#FF0000" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>
	<?
	switch($erreur)
		{
		case 1: 	echo "Erreur 001<br>Accès direct impossible"; 	// quelqu un essay davoir un accces direct
					echo "<br>vous essayez d'accéder à un fichier protégé en passant par: ";
					echo $path;break;
		
		case 2:		echo "Erreur 002<br>";
					echo "Vous essayer d acceder a une Page d un espace membres ..."; 
					break;
		
		case 3 :	echo "Erreur de Connection à la base donnee";
					echo '<br>Erreur 003<br>Impossible de se connecter a la base de donnee !!';
					break;
		
		case 4 :	echo "Erreur Base de donnee: <br>";
					echo "$msg";break;
							
		default : 	echo "Erreur EEFF<br>";
					echo "Veuillez contacter votre administrateur Reseau<br>";
					echo "$erreur";
					break;
		}

	?>
	</strong></font></div></td>
  </tr>
  <tr> 
    <td height="23" valign="top"><a href="plan.php"><div align="center">Retour</div></a></td>
    </tr>
  <tr>
    <td height="330">&nbsp;</td>
  </tr>
</table>
