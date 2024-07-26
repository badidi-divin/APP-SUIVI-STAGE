<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Changer Login Mot passe</title>

<link rel="shortcut icon" href="logo.jpg" />



<script>

function obligenutil(){

var nutilid=document.getElementById("nutil").value;
var ancienlog=document.getElementById("anlog").value;

var nom=document.getElementById("nom").value;
var postnom=document.getElementById("post").value;


var prenom=document.getElementById("pre").value;
var nationalite=document.getElementById("national").value;


var newloginee=document.getElementById("loginee").value;
var password=document.getElementById("codeee").value;


if(ancienlog==""){

alert("Vous ne pouvez pas continuer sans saisir votre ancie login valide ...");

}else if (nom==""){

alert("saisir votre nom");



}else if (postnom==""){

alert("saisir votre postnom");



}else if (prenom==""){

alert("saisir votre prenom");


}else if (nutilid==""){

alert("Vous ne pouvez pas continuer sans avoir créer un nutil");



}else if (nationalite==""){

alert("saisir votre nationalité");



}else if (newloginee==""){

alert("saisir un nouveau login");



}else if (password==""){

alert("saisir un nouveau mot de passe");


}

}
function imprimers(){



var zone=document.getElementById("liste").innerHTML;
var fen=window.open("","","width=1260,height=630,toolbar=0,menubar=0,scrollbar=1,resizable=1,status=0,location=0,left=10,top=10");
fen.document.title="ISPT-KIN";
fen.document.body.innerHTML +="" + zone + "";
fen.window.print();
fen.window.close();


return true;


}


function retour(){
window.location="profil.php";

}

</script>




</head>

<body onload="test4()" style="color:#000000; margin-left:260px; margin-right:260px; font-size:24px; background-color:#CCCCCC;">


<div style="background-color:#0000CC; border:groove 1px; border-color:#CCCCCC; color:#FFFFFF;">
							
							
	<?php


require_once("connexion.php");

$codes=$_GET['id'];


$req3="SELECT * FROM `etudiants` where id='$codes'";
$rs3=mysql_query($req3) or die (mysql_error());


if ($u=mysql_fetch_assoc($rs3)){


$req="SELECT * FROM `etudiants` where id='$codes'";
$rs=mysql_query($req) or (die(mysql_error()));



}
else
{

$req="SELECT * FROM `etudiants` where id='$codes'";
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
													
			<center>
			
				 <label style="font-size:40px; text-align:center;">
			
									
			
									REPUBLIQUE DEMOCRATIQUE DU CONGO
										
										
             </label>
							             
										 
										
				
				</div>
				
					 </center>
				
			
				
				<div style="background-color:#0000CC; border:groove 1px; border-color:#CCCCCC; color:#FFFFFF;">
							
										
													
		<label style="font-size:25px; text-align:center;">
			
								 <center>		
											ISPT - KIN
										
								 </center>		
            </label>
							              
				
				</div>	
				
				</div>
				



    
</p>
				 

   
   
  
   
   
   
   
   
   
   
   
  	
				
				
	<!-- AFFICHAGE LISTE" -->	   
			<div id="impe">
									<label style="font-size:25px; color:#FF0000;">LISTE DES ETUDIANTS:
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
									<img src="printer.ico" width="60px" height="40px;" onclick="imprimers()">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
									<img src="closee.JPG" id="c11" width="60px" height="25px;" onclick="actualiz()"></label>
		<table border="thick 1%" id="liste" cellpadding="" style="position:absolute; width:850px; text-align:center;">					
		
		
		<th bgcolor="#FFFFFF" style="color:#000099;" >N°</th>
		<th bgcolor="#FFFFFF" style="color:#000099;" >NOM</th>
		<th bgcolor="#FFFFFF" style="color:#000099;" >CLASSE</th>
		<th bgcolor="#FFFFFF" style="color:#000099;" >ENTREPRISE</th>
		<th bgcolor="#FFFFFF" style="color:#000099;" >ANNEE</th>
		
				<?php while($ET1=mysql_fetch_assoc($rs)){?>
						
					<tr style="background-color:#000099; color:#FFFFFF;">	<td><?php echo($ET1['id'])?></td><td><?php echo($ET1['nom'])?></td><td><?php echo($ET1['classe'])?></td>
					         <td><?php echo($ET1['entreprise'])?></td> <td><?php echo($ET1['annee_academique'])?></td>

							
					
					
					
					</tr>
							
				<?php } ?>					
	
		</table>		






<br/>


</center>

</body>
</html>
