<?
include ("verifsess.php");
$euro=6.55;			// fixe une valeur pour convertion en franc
session_register("euro");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>     --> e-Banque <--     </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<frameset rows="*" cols="150,*" frameborder="NO" border="0" framespacing="0">
  <frame src="menu.php" name="leftFrame" scrolling="NO" noresize>
  <frameset rows="70,*" frameborder="NO" border="0" framespacing="0">
    <frame src="titre.php" name="topFrame" scrolling="NO" noresize>
    <frame src="plan.php" name="mainframe">
  </frameset>
</frameset>
<noframes><body>

</body></noframes>
</html>
