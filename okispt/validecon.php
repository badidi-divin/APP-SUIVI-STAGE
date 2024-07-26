<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>


</head>

<body>


<?php

require_once("connexion.php");
$log=$_POST["login"];
$pass=$_POST["motdepass"];

$req="select * from admin where login='$log' and motdepasse='$pass'";
$rs=mysql_query($req) or die (mysql_error());

if ($u=mysql_fetch_assoc($rs)){

header("location:Accueil.php");
}
else
{

header("location:erreur1.php");

}

?>

</body>
</html>
