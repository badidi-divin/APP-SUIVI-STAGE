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
$entreprise=$_POST['codeentre'];
$a="";
$b=$_POST['nom'];
$b1=$_POST['postnom'];
$b2=$_POST['prenom'];
$c=$_POST['classe'];
$entreprise2=$_POST['anneecode'];
$e=$_POST['annee'];
$f=$_POST['entre'];



$req1="insert into etudiants(id,matricule,nom,classe,entreprise,code_entreprise,code_entreprise2,annee_academique) values ('".time()."','".$a."','".$b." ".$b1." ".$b2."','".$c."','".$f."','".$entreprise."','".$entreprise2."','".$e."')";

mysql_query($req1) or (die(mysql_error()));




header("location:Accueil.php");


?>


</head>

<body>
</body>
</html>
