<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Changer Login Mot passe</title>

<link rel="shortcut icon" href="logo.jpg" />



<script>

function imprimer(){
var zone=document.getElementById("lst").innerHTML;
var fen=window.open("","","width=1100,height=650,toolbar=0,menubar=0,scrollbar=1,resizable=1,status=0,location=0,left=10,top=10");
fen.document.title="LES UTILISATEURS NIfasInfo";
fen.document.body.innerHTML +="" + zone + "";
fen.window.print();
fen.window.close();
return true;
}

function paie(){

document.getElementById("mpesa").style.display="inline";
document.getElementById("carte").style.display="inline";

}

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



function retour(){
window.location="accueil.php";

}



function mpesa(){
window.location="mpesa.php";

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

$req="SELECT * FROM `etudiants` where id='àààoi_iiiuhj___çàààààkkkjbh&'";
$rs=mysql_query($req) or (die(mysql_error()));


echo "

<table style='position:absolute; top:250px; left:330px; font-size:25px; ' >
<tr>
<td> 
<img src='unnamed (10).gif' width='140px' height='140px'  style='border-radius:550px'></td>
<tr>
</tr>
<td> Nous ne retrouvons pas d'information dans le serveur pour ce nom ... </td>
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
				
				
				<form action="messagerecu.php" method="post">
				
				
		<input type="hidden" name="code3" id="" value="<?php echo("$codes");?>" onclick="" style="width:139px; height:30px; border-radius:2px; border-style:none; background-color:#000099; color:#FFFFFF;  position:absolute; left:315px;">
		
	<input type="hidden" value="MESSAGE" onclick="message()" style="width:120px; height:30px; border-radius:2px; border-style:none; background-color:#000099; color:#FFFFFF;  position:absolute; left:835px;">
	
	
	 </form>	
		
		<input type="button" value="PAYER PAR M-PESA" id="mpesa" onclick="mpesa()" style="width:120px; height:30px; border-radius:2px; border-style:none; background-color:#000099; color:#FFFFFF;  position:absolute; left:535px; display:none;">
		
		
		<input type="button" value="IMPRIMER" id="carte" onclick="imprimer()" style="width:145px; height:30px; border-radius:2px; border-style:none; background-color:#000099; color:#FFFFFF;  position:absolute; left:800px;">
		
		
		
		<input type="button" value="RETOUR" onclick="retour()" style="width:120px; height:30px; border-radius:2px; border-style:none; background-color:#000099; color:#FFFFFF;  position:absolute; left:965px;">		


   
</p>
				 

   
   
  
   
 
   
   
   <fieldset id="lst" style="position:absolute; top:145px; width:792px; border-color:#CCCCCC; color:#000066; background-color:#F0F0F0">
   
   
   
   
   <?php while($ET=mysql_fetch_assoc($rs)){?>	
   <legend style="font-size:28px; color:#FFFFFF; background-color:#000066"><?php echo($ET['nom'])?>&nbsp;&nbsp;<?php echo($ET['annee_academique'])?></legend>
   <label>ENTREPRISE D'AFFECTATION:&nbsp;&nbsp;<?php echo($ET['entreprise'])?></label>
   <hr style="border-color:#FF0000">
  <label style="font-size:27px; color:#000066; position:center;"><center>...FICHE D'APPRECIATION FINALE...</center><label style="color:#FF0000;"></label> 
  <hr style="border-color:#FF0000">
   
   
   								

   
   
   
   

				<form action="validercote.php" method="post" enctype="multipart/form-data">
					
					
					<input type="hidden" name="id" id="anlog" value="<?php echo($ET['id'])?>" style="width:180px; height:25px; color:#000066; position:absolute; left:200px">	
					
					
					
					
					

	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
		
						
						
												 				
									
					
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	<input type="hidden" name="ids" id="anlog" value="<?php echo($ET['id'])?>">
		
			
	
	
							&nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">ORDRE ET PROPRETE&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_op" id="anlog" value="<?php echo($ET['c1'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/5</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	<hr style="border-color:#FFFFFF">
		
				 				
			
    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">PONCTUALITE&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_ponct" id="anlog" value="<?php echo($ET['c2'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/5</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	<hr style="border-color:#FFFFFF">
		
		
		
	&nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">RESPECT DES AUTORITES&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_resp" id="anlog" value="<?php echo($ET['c3'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/5</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">
	
	
	&nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">RELATIONS AVEC LES AUTRES&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_relat" id="anlog" value="<?php echo($ET['c4'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/5</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">
	
	
	&nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">ADRESSE ET PRECISION&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_adp" id="anlog" value="<?php echo($ET['c5'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">COMPREHENSION&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_comp" id="anlog" value="<?php echo($ET['c6'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">CAPACITE A RESOUDRE LES PROBLEMES&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_capa" id="anlog" value="<?php echo($ET['c7'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">LANGAGE ET TERMINOLOGIE&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_langage" id="anlog" value="<?php echo($ET['c8'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">AMOUR DU TRAVAIL&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_amour" id="anlog" value="<?php echo($ET['c9'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">RESPECT DES BIENS COMMUNS ET D'AUTRUI&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_respb" id="anlog" value="<?php echo($ET['c10'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px; textalign:center;">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:26px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">SENS DU DEVOIR&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_sens" id="anlog" value="<?php echo($ET['c11'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	<hr style="border-color:#FFFFFF">


    &nbsp;&bull;&nbsp;<label style="font-size:25px; color:#000066;">CIVISME&nbsp;&nbsp;: <label style="color:#FF0000;"></label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
	<input type="text" name="s1_civisme" id="anlog" value="<?php echo($ET['c12'])?>" readonly="none" style="width:50px; height:25px; color:#000099; position:absolute; left:630px; background-color:#F0F0F0; border-style:none; font-size:25px">
	<label style="color:#FF0000;  left:650px; position:absolute; left:690px; color:#000099;  font-size:25px">/10</label>
	
	<input type="hidden" name="xy" id="anlog" value="<?php echo($ET['codep'])?>">
	
	




    <hr style="border-color:#FF0000">
    <label style="font-size:30px; color:#000066; position:center;"><center>TOTAL OBTENU  :&nbsp;&nbsp;&nbsp;<?php echo($ET['s1_total'])?>&nbsp;&nbsp;/&nbsp;&nbsp;100</center><label style="color:#FF0000;"></label> 
	<hr style="border-color:#FF0000">										
    
	
	        
	<label><center>::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::</center></label>	
     


























































































































































         
		<?php } ?>
	 
		 
</fieldset>	






<br/>


</center>

</body>
</html>
