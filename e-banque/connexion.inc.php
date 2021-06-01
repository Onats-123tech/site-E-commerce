<?PHP
// script de connection a la Base de donnee
$path=$PHP_SELF;

//on regarde si le nom de la page à protéger se trouve dans l'url en cours
// la fonction eregi() recherche une occurence de connexion.inc.php dans l'url
//et renvoie VRAI si elle trouve.

if ( eregi("connexion.inc.php",$path) )
    {  					
    header("Location: erreur.php?erreur=1");
	exit();
    }

$user='root';			// parametre de connexion a la base
$passwd='';
$hostname='localhost';
$namedb='ebanque';
$table='client';
$compte='compte';
$hist='operation';
$formulaire='formulaire';
$cheque='cheque';
			
$id=mysql_connect($hostname,$user,$passwd);

if(!$id)		// si aucune connexion
	{
	header("Location: erreur.php?erreur=3");
	exit();
	}


?>