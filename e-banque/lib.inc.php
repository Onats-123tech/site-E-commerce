<?		// petite biblio contenant quelque fonction				
					
				// execute une requette sql et teste
function ExeSql($sql)
	{
	$ret=mysql_query ($sql);
	if(!$ret)
		{
		header("Location: erreur.php?erreur=4&msg=".mysql_error());
		exit();
		}
	return $ret;	
	}
		// fonction virement effectue un virement de type credit ou debit
					// $cd == credit ==> crediter
					// $cd == debit ==> debiter
function virement($idcompte,$montant,$lib,$cd)
	{
	$compte='compte';			
	$hist='operation';
	$namedb='ebanque';
								// lecture du solde du compte a debiter ou a crediter
	mysql_select_db ($namedb);
	$sql = "SELECT SOLDE FROM $compte WHERE ID_compte='$idcompte' ";
	$ret=ExeSql($sql);
								// mise a jour du solde du compte a debiter ou a crediter
	$solde=mysql_fetch_array($ret);
	$newmontant=$solde['SOLDE'];
	if($cd == "credit")
		{			// si credit 
		$newmontant+=$montant;		// on rajoute au solde le montant a crediter
		$operat="Virement ".$lib;
		$credit=$montant;
		}
	if($cd == "debit")
		{			// si debit	
		$newmontant-=$montant;		// on enleve du solde le montant a debiter
		$operat="Virement ".$lib;
		$debit=-$montant;
		}
									// mise a jour du nouveau solde
	$sql="update $compte set SOLDE = '$newmontant' where ID_compte='$idcompte'";
	ExeSql($sql);
				
								// on ecrit l'operation faite pour l'historique du compte idcompte
	$sql = "INSERT INTO `$hist` (`ID_compte`, `date`, `datev`, ";
	$sql.="`operation`, `debit`, `credit`) VALUES ('$idcompte', '".date("d / m / Y")."','".date("d / m / Y")."',";
	$sql.="'$operat', '$debit', '$credit')"; 
	ExeSql($sql);
		
	}
				// recherche un numero de compte
function recherche($num_compte)
	{
	$compte='compte';			
	$namedb='ebanque';
							// recherche du numero de compte dans la table compte
	mysql_select_db ($namedb);
	$sql = "SELECT ID_compte FROM $compte WHERE num_compte='$num_compte' ";
	$ret=ExeSql($sql);
									// si il ya un numero de compte on renvoi id_compte lui
	$compte=mysql_fetch_array($ret);	// correspondant pour effectuer le virement
	$idcompte=$compte['ID_compte'];

	return $idcompte;
	}

function rechpass($pass,$ident)
	{					// verifie si l ident ou le pass sont existant et vont bien ensemble
	$client='client';			
	$namedb='ebanque';
							// recherche du mot de passe dans table client
	mysql_select_db ($namedb);
	$sql = "SELECT ID_client FROM $client WHERE ident='$ident' and passwd='$pass' ";
	$ret=ExeSql($sql);
									// si il ya un mot de pass ou un ident correspondant a celui demander
	$client=mysql_fetch_array($ret);	// alors on renvoie l index sinon 0 l ident ou le pass ne sont pas dans la base	
	$idclient=$client['ID_client'];		// ou ne vont pas ensemble

	return $idclient;
	}

function changepass($idclient,$pass)	// change le mot de passe a l idclient
	{
	$client='client';			
	$namedb='ebanque';
							// mise a jour du nouveau pasword
	mysql_select_db ($namedb);
	$sql="update $client set passwd = '$pass' where ID_client='$idclient'";
	ExeSql($sql);
			
	}

function bloquer($idcompte)
	{
	$compte='compte';			
	$namedb='ebanque';
							// recherche si compte bloquer
	mysql_select_db ($namedb);
	$sql = "SELECT bloquer FROM $compte WHERE ID_compte='$idcompte' ";
	$ret=ExeSql($sql);
										
	$compte=mysql_fetch_array($ret);	
	$bloquer=$compte['bloquer'];

	if(!$bloquer)		
		$etat="Non Bloque";
	else
		$etat="Bloque";

	return $etat;
	}

function renvoinum($idcompte,$demande=0)		// renvoie le numero du compte et le nom  du client si demander
	{
	$client='client';
	$compte='compte';			
	$namedb='ebanque';
							// recherche si compte bloquer
	mysql_select_db ($namedb);
	$sql = "SELECT num_compte,nom FROM $client,$compte WHERE ID_compte='$idcompte' and $client.ID_client=$compte.ID_client";
	$ret=ExeSql($sql);
										
	$compte=mysql_fetch_array($ret);	
	$num=$compte['num_compte'];
	$nom=$compte['nom'];
	
	if(!$demande)		
		$ret=$num;
	else
		$ret=$num." ".$nom;

	return $ret;
	}
	
?>