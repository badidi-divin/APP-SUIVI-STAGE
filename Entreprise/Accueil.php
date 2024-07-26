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

function confirmmodif(){
alert("Modification effectuée avec succès");
}


function ajoutS(){
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


function changer(){

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
document.getElementById("cmd").style.display="inline";
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
document.getElementById("cmd").style.display="none";
}





function affepc(){
document.getElementById("cmd").style.display="none";
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
document.getElementById("cmd").style.display="none";
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

document.getElementById("cmd").style.display="none";
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

document.getElementById("cmd").style.display="none";
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


document.getElementById("cmd").style.display="none";
document.getElementById("etd").style.display="none";
document.getElementById("menu").style.display="none";
document.getElementById("epc").style.display="none";
document.getElementById("msgwrite").style.display="none";
document.getElementById("msgread").style.display="none";

document.getElementById("listeusers").style.display="none";
document.getElementById("nadlogo").style.display="none";
document.getElementById("intro").style.display="none";

}else{

document.getElementById("cmd").style.display="none";
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

			

 
  <!-- CHOIX DU COMPTE A CREER" -->             
                         
						 
						 
	

						
						
						
						
						<form action="facture.php" method="post" enctype="multipart/form-data">
						
						<input type="button" value="MENU" style=" height:30px; background-color:#000099; color:#FFFFFF; width:110px; border-radius:5px; border-style:none;" onclick="affichmenu()">
						
						
						
						
						
						
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;
						
						
						


						</form>
						<hr>


<!-- FIN CHOIX DU COMPTE A CREER" -->

          




<!-- FORMULAIRE D'ENREGISTREMENT DES ETUDANTS PAR L'ADMIN" -->


	<fieldset id="etd" style="width:500px; position:absolute; top:180px; color:#000000; display:none">


				<legend style="font-size:25px; color:#FF0000; background-color:;">
				
			LISTE DE STAGIAIRES / ISPT - KIN:
				
				</legend>
				


<form action="liste.php" method="post" enctype="multipart/form-data">
<p/>
<label style="color:#FF0000; background-color:#FFFF00;">CODE:</label>
<input type="text" name="code" id="mat" placeholder="Saisir votre code" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">




<p/>

                         		
		<hr/>
<center><input type="submit" value="AFFICHER" onclick="ajout()" style="height:35px; width:170px; border-radius:5px; border-style:none;  background-color:#000099; color:#FFFFFF;">
<center>
        <hr/>
</form>




				





</fieldset>

<!-- FIN DU FORMULAIRE D'ENREGISTREMENT DES ETUDANTS PAR L'ADMIN" -->




<!-- FORMULAIRE CHANGER MOT DE PASSE" -->


	<fieldset id="cmd" style="width:500px; position:absolute; top:180px; color:#000000; display:none; left:470px;">


				<legend style="font-size:25px; color:#FF0000; background-color:;">
				
			CHANGER VOTRE MOT DE PASSE 
				
				</legend>
				


<form action="nouveaucode.php" method="post" enctype="multipart/form-data">
<p/>
<label style="color:#FF0000; background-color:#FFFF00;">Ancien code:</label>
<input type="text" name="Ancien" id="Ancien" placeholder="Ancien code" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">

<p/>
<hr/>
 <label style="color:#FF0000; background-color:#FFFF00;">Nouveau code:</label>
<input type="text" name="Nouveau" id="Nouveau" placeholder="Nouveau code" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">

<p/>                        		
		<hr/>
<center><input type="submit" value="MODIFIER" onclick="confirmmodif()" style="height:35px; width:170px; border-radius:5px; border-style:none;  background-color:#000099; color:#FFFFFF;">
<center>
        <hr/>
</form>




				





</fieldset>

<!-- FIN FORMULAIRE CHANGER MOT DE PASSE" -->







<!-- FORMULAIRE E P C" -->


	<fieldset id="epc" style="width:500px; position:absolute; top:180px; color:#000000; display:none">


				<legend style="font-size:25px; color:#FFFFFF; background-color:#000000;">
				
			AJOUTER UN E.P.C:
				
				</legend>
				


<form action="SaveEpc.php" method="post" enctype="multipart/form-data">


<p/>
<label style="color:#FFFFFF; background-color:#000000;">Matricule Parent:</label>
<input type="text" name="matpar" id="" placeholder="saisir le matricule" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">


<p/>
<label style="color:#FFFFFF; background-color:#000000;">code:</label>
<input type="text" name="code" id="" placeholder="saisir le matricule" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">

<p/>
<label style="color:#FFFFFF; background-color:#000000;">Nom:</label>
<input type="text" name="nom" id="" placeholder="saisir le nom" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">

<p/>
<label style="color:#FFFFFF; background-color:#000000;">Postnom:</label>
<input type="text" name="postnom" id="" placeholder="saisir le postnom" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">


<p/>

<label style="color:#FFFFFF; background-color:#000000;">Classe:</label>
<input type="text" name="classe" id="" placeholder="saisir la classe" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">


<p/>
<label style="color:#FFFFFF; background-color:#000000;">Frais:</label>
<input type="text" name="frais" id="" placeholder="saisir le frais en dollars" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center;">


	
			
			<p/>
                         
			
			
		<hr/>
<input type="submit" value="Ajouter EPC" onclick="ajout()" style="height:35px; width:170px; border-radius:5px; border-style:none;  background-color:#000099; color:#FFFFFF;">

        <hr/>
</form>




				





</fieldset>

<!-- FIN DU FORMULAIRE D'ENREGISTREMENT E P C" -->




































 









																																																										
																																																										
																																																										
																																																										
																																																									











<!-- AFFICHAGE MENU" -->


	<fieldset id="menu" style="width:350px; position:absolute; top:180px; color:#000000; display:none;">


				<legend style="font-size:25px; color:#FF0000; background-color:#FFFF00">
				
				MENU:----<img src="ispt.JPG" width="30px" height="20px;" onclick="actualiz()">
				
				</legend>
				
	<center>		
			


<hr/>
<form action="" method="post">

<input type="hidden" name="filtre">
<input type="button" value="Etudiant Affectés" onclick="listeaffectes()" style="height:35px; width:170px; font-size:18px; border-radius:5px; border-style:none;  background-color:#000099; color:#FF0000;">
</form>


<hr/>
<form action="" method="post">

<input type="hidden" name="filtre">
<input type="button" value="Changer Password" onclick="changer()" style="height:35px; width:170px; font-size:18px; border-radius:5px; border-style:none;  background-color:#000099; color:#FF0000;">
</form>





<hr/>
<input type="button" value="Deconnexion" onclick="deconnect()" style="height:35px; width:170px; font-size:18px; border-radius:5px; border-style:none;  background-color:#000099; color:#FF0000;">




		</center>		





</fieldset>

<!-- FIN MENU" -->





























	<!-- AFFICHAGE DU FORMULAIRE  MESSAGE RECU" -->	
	
	
	
				<fieldset id="msgread" style="width:740px; position:bottom; height:440pSx; overflow:autoS; display:none;">
				
									<legend style="font-size:25px; color:#FFFFFF; background-color:#000000;">GERER DES MESSAGES:</legend>
									
									
					<?php while($ET=mysql_fetch_assoc($rs)){?>				
									
									
				<form action="SupprimeMsgAdmin.php" method="post">  <p/>
				
						
						
							<label style="color:#00FF00;">Message N/S:&nbsp;&nbsp;</label>
							<label style="color:#FFFFFF;"><?php echo($ET['ref2'])?></label>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;
							
							<label style="color:#00FF00;">Envoyé le&nbsp;&nbsp;</label>
							<label style="color:#FFFFFF;"><?php echo($ET['date'])?></label>
						
						
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			
					
						
						
						<p/>
						
						<label style="color:#00FF00;">Par : &nbsp;</label>
						<input type="text" name="" readonly="true" value="<?php echo($ET['expediteur'])?>" id="kkkki" placeholder="expedit" style="width:170px; height:25px; color:#FFFFFF; background-color:#000000; font-family:Andalus; border-style:none; font-size:15px;"><br/>
						

						
						 <label style="color:#00FF00;">Message:&nbsp;&nbsp;</label><br/>
						 <input type="text" readonly="true" name="" value="<?php echo($ET['message'])?>" placeholder="objet" style="width:350px; height:25px;  color:#FFFFFF; background-color:#000000; font-family:Andalus; border-style:none; font-size:15px;">
						
						
						<input type="hidden" name="refmsg" value="<?php echo($ET['id'])?>" placeholder="verif for delete">

					
					
					<p/>
					
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						
						&nbsp;&nbsp;&nbsp;
						
						<input type="button" value="Supp msg" style="font-size:20px;background-color:#000099; color:#FFFFFF; border-style:none; font-family:Geneva, Arial, Helvetica, sans-serif;" onclick="deletemsg(<?php echo($ET['id'])?>)">
						
						<hr style="color:#00FF00; border-color:#00FF33; text-decoration:underline;">
							
				</form>
				
				 
	<?php } ?>

			 
				
			</fieldset>	
				
					
<!-- FIN AFFICHAGE DU FORMULAIRE  MESSAGE RECU" -->	


	
	
	<!-- AFFICHAGE FORM ENVOI DU MESSAGE" -->						
					<fieldset id="msgwrite" style="width:300px; position:fixed;bottom:100px;right:21px; top:185px; overflow:auto; border-style:none; display:none;" >
					
					        <legend style="font-size:20px; color:#FFFFFF; background-color:#000000;">ENVOYER UN MESSAGE:</legend><hr>
					
					
					
					<form action="messageAdmin.php" method="post">  <p/>
				

						<input type="hidden" name="moi" value="Admin" style="width:170px; height:25px; color:#000099;">
						
				

						<textarea name="texte" placeholder="ecrire votre message" style="width:300px; height:170px; color:#000099;"></textarea><p/>

						
						
						<input type="hidden" name="date" value="<?php echo date('d-m-Y') ?> à <?php echo date('h:i') ?>"/>
						

						
						<input type="submit" value="send" onclick="autorisedelete()" style=" height:35px; width:100px; border-radius:5px; border-style:none; background-color:#000099; color:#FFFFFF;">
						
						
						
						
				</form>
				
				
						
					
						
							
					</fieldset>
					
					
	<!-- FIN AFFICHAGE FORM ENVOI DU MESSAGE" -->											
					
					
					
					


         
		 
		 
		 
		 
		 
		 
	<center>	 
		 
		 
		 
		 		
				
				
	<!-- AFFICHAGE LISTE" -->	
	
	   <div id="listeusers" style="width:1010px; position:fixed;bottom:100px;left:47px; top:185px; overflow:auto; display:none;">     
			
									<label style="font-size:25px; background-color:#000000; color:#FFFFFF;">LISTE DES ENFANTS PRISES EN CHARGE:
			
									</label>
									
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;
									
									<label><img src="closeee.JPG" width="40px" height="40px;" onclick="actualiz()"></label>
									<p>
		<table border="thick 1%" id="liste" cellpadding="" style="position:absolute; width:1000px; text-align:center; font-size:14px; background-color:#D7D7D7;">					
		
		<th bgcolor="#000000" style="color:#FFFFFF;" ></th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >MATRICULE PARENT</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >NOM PARENT</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >PRENOM PARENT</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >PRENOM PARENT</th>
		
		<th bgcolor="#000000" style="color:#FFFFFF;" >CODE ELEVE</th>	
		<th bgcolor="#000000" style="color:#FFFFFF;" >NOM</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >PRENOM</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >CLASSE</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >FRAIS</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >MAT PAR</th>
				
				<?php while($ET1=mysql_fetch_assoc($rs1)){?>
						
					<tr>	<td onclick="actualiz()" style="color:#000000;" ><?php echo($ET1['id'])?></td>
					        <td style="color:#000099; font-family:Georgia, "Times New Roman", Times, serif" ><?php echo($ET1['matricule'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['nom'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['postnom'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['prenom'])?></td>
							
							<td style="color:#000099;" ><?php echo($ET1['code'])?></td>
					        <td style="color:#000099;" ><?php echo($ET1['nom2'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['postnom2'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['classe'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['frais'])?>&nbsp;&nbsp;$</td>
							<td style="color:#000099;" ><?php echo($ET1['matpar'])?></td>
							
							
							<td><input type="button" value="Supp" style="font-size:20px;background-color:#000099; color:#FFFFFF; border-style:none; font-family:Geneva, Arial, Helvetica, sans-serif;" onclick="deleteet(<?php echo($ET1['id'])?>)"></td>
							
					
					
					
					</tr>
							
				<?php } ?>					
	
		</table>		
				
		</div>
				
					
	
</center>



<!-- AFFICHAGE DE LA LISTE DES CODES CMP" -->						
					<fieldset id="nadlogo" style="width:220px; position:fixed;bottom:100px;right:46px; top:185px; overflow:auto; display:none" onclick="t2()">
					
					        <legend style="font-size:20px; background-color:#000000; color:#FFFFFF;">Admin / NIfasInfo</legend><hr>
						
						<img src="nad2.JPG" width="190px" height="147px;" onclick="ajouterCMP()"><br/>
						<img src="logo.jpg" width="190px" height="147px;" onclick="ajouterCMP()">
						
							
					</fieldset>
					
					
	<!-- FIN AFFICHAGE DE LA LISTE DES CODES CMP" -->
	
	
	<!-- FIN AFFICHAGE LISTE" -->
		<p/><p/><p/>
	
	<center>
	
	   <img id="intro" src="img1.JPG" width="980px" height="200px;" style="display:inlines;">
	   
	</center>         

</body>
</html>
