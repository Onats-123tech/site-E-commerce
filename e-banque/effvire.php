<?
			// traitement du formulaire de virement interne
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
	header("Location: virement.php?virement=$ret");
	}
else			// traitement du virement
	{
	include("verifsess.php");
										// virement entre les 2 compte
	if( (bloquer($debit) == "Non Bloque") && (bloquer($credit) == "Non Bloque"))
		{
		virement($debit,$montant,"Interne ".$libdebit." vers ".renvoinum($credit),"debit");
		virement($credit,$montant,"Interne ".$libcredit." de ".renvoinum($debit),"credit");
		header("Location: virement.php?virement=Virement Bien Effectué. Voulez-vous effectuer un autre virement?");
		}
	else
		header("Location: virement.php?virement=Virement Non Effectué. Verifier l etat de vos comptes");

	}
?>