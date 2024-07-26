<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Validation New Log</title>

<link rel="shortcut icon" href="logo.jpg" />
<script>
function actualis(){
window.location="ErreurVerifProv.php";

}
</script>
</head>

<body style="color:#000099; margin-left:100px; margin-right:100px; background-color:#F6F6F6;">


<div style="background-color:#000099; border:groove 1px; border-color:#000099; color:#FFFFFF; ">
							
							
										
													
			<img src="AppImages/logo.jpg" width="60px" height="34px">
			
			<label style="font-size:44px; text-align:center;">
			
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										
			
										NIfasCom&nbsp;&nbsp;&nbsp;&nbsp;Safety
										
										
            </label>
							             
										 
										
				
				</div>
				




<?php
require_once("connexion.php");
$a=$_POST['Ancien'];
$b=$_POST['Nouveau'];

$req2='update code_entreprises set motdepasse="'.$b.'", anneecode="'.$b.'" where  motdepasse="'.$a.'"';
mysql_query($req2) or (die(mysql_error()));

$req='update etudiants set code_entreprise="'.$b.'", code_entreprise2="'.$b.'" where  code_entreprise="'.$a.'"';
mysql_query($req) or (die(mysql_error()));
header("location:Accueil.php");
?>


</body>
</html>
