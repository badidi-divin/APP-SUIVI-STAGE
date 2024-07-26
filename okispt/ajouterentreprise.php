<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SaveEtud</title>

<link rel="shortcut icon" href="rdc.gif" />

<script>
document.oncontextmenu = new Function("return false");
</script>


<!-- LA PAGE PHP POUR L'ENREGISTREMENT DE L'ETUDIANTS" -->

<?php
require_once("connexion.php");

$login=$_POST['login'];
$annee=$_POST['annee'];




$req1="insert into code_entreprises(id,login,annee,motdepasse,anneecode) values ('".time()."','".$login."','".$annee."','".'ispt'.time()."','".'ispt'.time().$annee."')";

mysql_query($req1) or (die(mysql_error()));




header("location:Accueil.php");


?>


</head>

<body>
</body>
</html>
