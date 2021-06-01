<?
			// traitement du formulaire de virement externe
if(!$debit)				// traitement en cas d erreure
	$erreur.="Compte à debiter, ";
if(!$credit)
	$erreur.="Compte à créditer, ";
if(!$montant)
	$erreur.="Montant du virement, ";
if($debit == $credit && $debit!=0 && $credit!=0)	// si meme compte selectionner
	$erreur.="Les comptes à créditer et a débiter sont identiques, ";
if($erreur)
	{
	$ret="Les informations suivantes sont obligatoires : ".$erreur;
	header("Location: viremext.php?virement=$ret");
	}
else			// traitement du virement
	{
	include("verifsess.php");
									
	$idcompte=recherche($credit);
	if($idcompte)
		{							// virement entre les 2 compte
		if( (bloquer($debit) == "Non Bloque") && (bloquer($idcompte) == "Non Bloque"))
			{
			virement($debit,$montant,"Externe ".$libdebit." vers ".renvoinum($idcompte,1),"debit");
			virement($idcompte,$montant,"Externe ".$libcredit." de ".renvoinum($debit,1),"credit");
			header("Location: viremext.php?virement=Virement Bien Effectué. Voulez-vous effectuer un autre virement?");
			}
		else
			header("Location: viremext.php?virement=Virement Non Effectué. Verifier l etat de vos comptes, le compte distant peut etre bloque");
		}
	else
		header("Location: viremext.php?virement=Le numero de compte à crediter n existe pas.");

	}
?>