<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Page Admin Etud</title>

<style type="text/css">
body{
     background:url(AppImgs/img7.jpg);
	 background-size:cover;
	 
}

</style>



<link rel="shortcut icon" href="rdc.gif" />


<script>
document.oncontextmenu = new Function("return false");
</script>



<script>


function deconnect(){
window.location="http://127.0.0.1/home/";
}



function ajout(){




alert("Ajout de l'agent effectué avec succès");
}




function deletemsg(effacer){



if(confirm("Confirmez vous la suppression de ce message ?")){
window.location.href='deletemessage.php?del_id=' +effacer+'';

alert("Suppression du message effectuée avec succès");

return true;
}

}



function deleteet(effacer){


if(confirm("Confirmez vous la suppression de cet eleve ?")){
window.location.href='supp_epc.php?id=' +effacer+'';

alert("Un enfant pris en charge est supprimé de la base de données");



return true;
}

}



function testmoi(){

window.location="agents.php";

}









function affichmenu(){

document.getElementById("etd").style.display="inline";
document.getElementById("epc").style.display="none";

document.getElementById("etd").style.left="470px";
document.getElementById("menu").style.display="inline";

document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";
document.getElementById("etd").style.display="none";
document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}





function affepc(){

document.getElementById("epc").style.display="inline";
document.getElementById("etd").style.display="none";
document.getElementById("etd").style.left="470px";
document.getElementById("epc").style.left="470px";
document.getElementById("menu").style.display="inline";

document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";

document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}



function paiement(){

window.location="paiement.php";

}



function retenuqz(){

window.location="retenu_qz.php";

}


function tabpaie(){

window.location="TablePaie.php";

}

function listeaffectes(){

document.getElementById("epc").style.display="none";
document.getElementById("etd").style.display="inline";
document.getElementById("etd").style.left="470px";
document.getElementById("epc").style.left="470px";
document.getElementById("menu").style.display="inline";

document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";

document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}



function deconnect(){

window.location="http://127.0.0.1/home/";

}



function TelviBoute(){

window.location="cameras.php";

}




function affmessage(){


document.getElementById("etd").style.left="";
document.getElementById("etd").style.display="none";
document.getElementById("menu").style.display="none";
document.getElementById("epc").style.display="none";
document.getElementById("msgwrite").style.display="inline";
document.getElementById("msgread").style.display="inline";

document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}





function affliste(){


document.getElementById("etd").style.left="";
document.getElementById("etd").style.display="none";
document.getElementById("menu").style.display="none";
document.getElementById("epc").style.display="none";
document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";

document.getElementById("listeusers").style.display="inline";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}









function actualiz(){

window.location="gestion.php";

}







function createcompt(){


var ami=document.getElementById("testes").value;


if(ami=="Enseignant"){



document.getElementById("etd").style.display="none";
document.getElementById("menu").style.display="none";
document.getElementById("epc").style.display="none";
document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";

document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}else{


document.getElementById("etd").style.left="";
document.getElementById("etd").style.display="inline";
document.getElementById("menu").style.display="none";
document.getElementById("epc").style.display="none";
document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";

document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}
}

</script>



</head>

<body onload="test4()" style="color:#000000; margin-left:70px; margin-right:70px; font-size:24px; background-color:#CCCCCC;">

<?php


require_once("connexion.php");

$codes=$_POST['code'];
$annee=$_POST['annee'];

$req3="SELECT * FROM `etudiants` where code_entreprise='$codes' and annee_academique='$annee' ORDER BY `nom` ASC";
$rs3=mysql_query($req3) or die (mysql_error());


if ($u=mysql_fetch_assoc($rs3)){


$req="SELECT * FROM `etudiants` where code_entreprise='$codes' and annee_academique='$annee' ORDER BY `nom` ASC";
$rs=mysql_query($req) or (die(mysql_error()));



}
else
{

$req="SELECT * FROM `etudiants` where code_entreprise='dbfdhjf_jjkf67'  and annee_academique='sgfqhytrfu' ORDER BY `nom` ASC";
$rs=mysql_query($req) or (die(mysql_error()));


echo "

<table style='position:absolute; top:300px; left:330px; font-size:25px; ' >
<tr>
<td> Aucune information disponible ... </td>
</tr>
</table>

";


}

?>								
					
<div style="background-color:#0000CC; border:groove 1px; border-color:#CCCCCC; color:#FFFFFF;">
							
							
									
													
			<center>
			
				 <label style="font-size:35px; text-align:center;">
			
									
			
									INSTITUT SUPERIEUR PEDAGOGIQUE ET TECHNIQUE DE KINSHASA
										
										
             </label>
							             
										 
										
				
				</div>
				
					 </center>
				
			
				
				<div style="background-color:#0000CC; border:groove 1px; border-color:#CCCCCC; color:#FFFFFF;">
							
										
													
		<label style="font-size:27px; text-align:center;">
			
								 <center>		
												EVALUATION DES STAGIAIRES 
										
								 </center>		
            </label>
							              
				
				</div><p/>

			


		 
		 
		 
		 		
				
				
	<!-- AFFICHAGE LISTE" -->	
	    <label style="font-size:25px; background-color:#000000; color:#FFFFFF;">LISTE DES ETUDIANTS AFFECTES:</label>
		
	   <div id="listeusers" style="width:1010px; position:fixed;bottom:100px; top:105px; overflow:auto; display:online; text-align:center;">     
			
									
			
									
									
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;
									
									
									<p>
		<table border="thick 1%" id="liste" cellpadding="" style="position:absolute; width:1000px; text-align:center; font-size:14px; background-color:#D7D7D7;">					
		
		<th bgcolor="#000000" style="color:#FFFFFF;" ></th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >NOM</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >CLASSE</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >ANNEE</th>
		
				
				<?php while($ET1=mysql_fetch_assoc($rs)){?>
						
					<tr>	<td onclick="actualiz()" style="color:#000000;" >&bull;</td>
					        <td style="color:#000099; font-family:Georgia, "Times New Roman", Times, serif" ><?php echo($ET1['nom'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['classe'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['annee_academique'])?></td>
							
					
					
					</tr>
							
				<?php } ?>					
	
		</table>		
				
		</div>
				
					
	
</center>



</body>
</html>
