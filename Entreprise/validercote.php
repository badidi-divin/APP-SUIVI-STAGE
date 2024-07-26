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
function retour(){
window.location="accueil.php";

}
</script>
</head>

<body style="color:#000099; margin-left:100px; margin-right:100px; background-color:#F6F6F6;">


<div style="background-color:#000099; border:groove 1px; border-color:#000099; color:#FFFFFF; ">
							
							
										

							             
										 
										
				
				</div>
				




<?php
require_once("connexion.php");

$id=$_POST['ids'];


$s4_op=$_POST['s4_op'];
$s4_ponct=$_POST['s4_ponct'];
$s4_resp=$_POST['s4_resp'];
$s4_relat=$_POST['s4_relat'];
$s4_adp=$_POST['s4_adp'];
$s4_comp=$_POST['s4_comp'];
$s4_capa=$_POST['s4_capa'];
$s4_langage=$_POST['s4_langage'];
$s4_amour=$_POST['s4_amour'];
$s4_respb=$_POST['s4_respb'];
$s4_sens=$_POST['s4_sens'];
$s4_civisme=$_POST['s4_civisme'];


$s1_op=$_POST['s1_op'];
$s1_ponct=$_POST['s1_ponct'];
$s1_resp=$_POST['s1_resp'];
$s1_relat=$_POST['s1_relat'];
$s1_adp=$_POST['s1_adp'];
$s1_comp=$_POST['s1_comp'];
$s1_capa=$_POST['s1_capa'];
$s1_langage=$_POST['s1_langage'];
$s1_amour=$_POST['s1_amour'];
$s1_respb=$_POST['s1_respb'];
$s1_sens=$_POST['s1_sens'];
$s1_civisme=$_POST['s1_civisme'];

$s2_op=$_POST['s2_op'];
$s2_ponct=$_POST['s2_ponct'];
$s2_resp=$_POST['s2_resp'];
$s2_relat=$_POST['s2_relat'];
$s2_adp=$_POST['s2_adp'];
$s2_comp=$_POST['s2_comp'];
$s2_capa=$_POST['s2_capa'];
$s2_langage=$_POST['s2_langage'];
$s2_amour=$_POST['s2_amour'];
$s2_respb=$_POST['s2_respb'];
$s2_sens=$_POST['s2_sens'];
$s2_civisme=$_POST['s2_civisme'];


$s3_op=$_POST['s3_op'];
$s3_ponct=$_POST['s3_ponct'];
$s3_resp=$_POST['s3_resp'];
$s3_relat=$_POST['s3_relat'];
$s3_adp=$_POST['s3_adp'];
$s3_comp=$_POST['s3_comp'];
$s3_capa=$_POST['s3_capa'];
$s3_langage=$_POST['s3_langage'];
$s3_amour=$_POST['s3_amour'];
$s3_respb=$_POST['s3_respb'];
$s3_sens=$_POST['s3_sens'];
$s3_civisme=$_POST['s3_civisme'];

$s1total=$s1_op + $s1_ponct + $s1_resp + $s1_relat + $s1_adp + $s1_comp + $s1_capa + $s1_langage + $s1_amour + $s1_respb + $s1_sens + $s1_civisme;

$s2total=$s2_op + $s2_ponct + $s2_resp + $s2_relat + $s2_adp + $s2_comp + $s2_capa + $s2_langage + $s2_amour + $s2_respb + $s2_sens + $s2_civisme;

$s3total=$s3_op + $s3_ponct + $s3_resp + $s3_relat + $s3_adp + $s3_comp + $s3_capa + $s3_langage + $s3_amour + $s3_respb + $s3_sens + $s3_civisme;

$s4total=$s4_op + $s4_ponct + $s4_resp + $s4_relat + $s4_adp + $s4_comp + $s4_capa + $s4_langage + $s4_amour + $s4_respb + $s4_sens + $s4_civisme;


$c1=($s1_op + $s2_op + $s3_op + $s4_op)/4;
$c2=($s1_ponct + $s2_ponct + $s3_ponct + $s4_ponct)/4;
$c3=($s1_resp + $s2_resp + $s3_resp + $s4_resp)/4;
$c4=($s1_relat + $s2_relat + $s3_relat + $s4_relat)/4;
$c5=($s1_adp + $s2_adp + $s3_adp + $s4_adp)/4;
$c6=($s1_comp + $s2_comp + $s3_comp + $s4_comp)/4;
$c7=($s1_capa + $s2_capa + $s3_capa + $s4_capa)/4;
$c8=($s1_langage + $s2_langage + $s3_langage + $s4_langage)/4;
$c9=($s1_amour + $s2_amour + $s3_amour + $s4_amour)/4;
$c10=($s1_respb + $s2_respb + $s3_respb + $s4_respb)/4;
$c11=($s1_sens + $s2_sens + $s3_sens + $s4_sens)/4;
$c12=($s1_civisme + $s2_civisme + $s3_civisme + $s4_civisme)/4;
$totacote=$s1total + $s2total + $s3total + $s4total;

$req2='update etudiants set s4_op="'.$s4_op.'", s4_ponct="'.$s4_ponct.'", s4_resp="'.$s4_resp.'", s4_relat="'.$s4_relat.'", s4_adp="'.$s4_adp.'", s4_comp="'.$s4_comp.'", s4_capa="'.$s4_capa.'", s4_langage="'.$s4_langage.'", s4_amour="'.$s4_amour.'", s4_respb="'.$s4_respb.'", s4_sens="'.$s4_sens.'", s4_civisme="'.$s4_civisme.'", s4_total="'.$s4total.'" where  id="'.$id.'"';
mysql_query($req2) or (die(mysql_error()));



$req='update etudiants set s3_op="'.$s3_op.'", s3_ponct="'.$s3_ponct.'", s3_resp="'.$s3_resp.'", s3_relat="'.$s3_relat.'", s3_adp="'.$s3_adp.'", s3_comp="'.$s3_comp.'", s3_capa="'.$s3_capa.'", s3_langage="'.$s3_langage.'", s3_amour="'.$s3_amour.'", s3_respb="'.$s3_respb.'", s3_sens="'.$s3_sens.'", s3_civisme="'.$s3_civisme.'", s3_total="'.$s3total.'" where  id="'.$id.'"';
mysql_query($req) or (die(mysql_error()));



$req21='update etudiants set s2_op="'.$s2_op.'", s2_ponct="'.$s2_ponct.'", s2_resp="'.$s2_resp.'", s2_relat="'.$s2_relat.'", s2_adp="'.$s2_adp.'", s2_comp="'.$s2_comp.'", s2_capa="'.$s2_capa.'", s2_langage="'.$s2_langage.'", s2_amour="'.$s2_amour.'", s2_respb="'.$s2_respb.'", s2_sens="'.$s2_sens.'", s2_civisme="'.$s2_civisme.'", s2_total="'.$s2total.'" where  id="'.$id.'"';
mysql_query($req21) or (die(mysql_error()));

$req22='update etudiants set s1_op="'.$s1_op.'", s1_ponct="'.$s1_ponct.'", s1_resp="'.$s1_resp.'", s1_relat="'.$s1_relat.'", s1_adp="'.$s1_adp.'", s1_comp="'.$s1_comp.'", s1_capa="'.$s1_capa.'", s1_langage="'.$s1_langage.'", s1_amour="'.$s1_amour.'", s1_respb="'.$s1_respb.'", s1_sens="'.$s1_sens.'", s1_civisme="'.$s1_civisme.'", s1_total="'.$s1total.'" where  id="'.$id.'"';
mysql_query($req22) or (die(mysql_error()));


$req27='update etudiants set c1="'.$c1.'", c2="'.$c2.'", c3="'.$c3.'", c4="'.$c4.'", c5="'.$c5.'", c6="'.$c6.'", c7="'.$c7.'", c8="'.$c8.'", c9="'.$c9.'", c10="'.$c10.'", c11="'.$c11.'", c12="'.$c12.'", totacote="'.$totacote.'" where  id="'.$id.'"';
mysql_query($req27) or (die(mysql_error()));

?>



<input type="button" value="Operation effectuee avec succes; cliquez pour retourner" onclick="retour()" style="width:720px; height:90px; border-radius:2px; border-style:none; background-color:#000099; color:#FFFFFF; position:absolute; top:150px;">		

  



</body>
</html>
