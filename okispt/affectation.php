
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ma page index</title>
<style type="text/css">
body{
     background:url();
	 background-size:cover;
	 
}

</style>
</head>

<script>

function affectation(){




alert("Affectation de l'étudiant validée ...");
}


function retour(){

window.location="Accueil.php";

}

function eleve2(){

code=prompt("Veillez saisir l'année academique...", "Révérend KIM");
document.getElementById("codes").value=code;

}


function eleve(){
window.location="FormEleve.php";

}

</script>

<body onload="test4()" style="color:#000000; margin-left:260px; margin-right:260px; font-size:24px; background-color:#CCCCCC;">
<?php


require_once("connexion.php");

$codes=$_GET['motdepasse'];


$req3="SELECT * FROM `code_entreprises` where motdepasse='$codes'";
$rs3=mysql_query($req3) or die (mysql_error());


?>								
		

<div style="background-color:#0000CC; border:groove 1px; border-color:#CCCCCC; color:#FFFFFF;">
							
							
									
													
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
         <form method="post" action="FormEleve.php" enctype="multipart/form-data" style="";>
		 
		 
		
		
		

<input type="button" value="RETOUR" onclick="retour()" style="color:#FF0000; height:30px; width:200px; ">

	     </form>


<fieldset style="position:absolute; top:120px; width:807px; border-color:#CCCCCC; color:#000066; background-color:#F0F0F0">
   
   
   
   <legend style="font-size:25px; color:#FFFFFF; background-color:#000066">AFFECTATION DES ETUDIANTS EN STAGE</legend>
   
   
   
   
   
   
   
   
   
   
   
   
<form method="post" action="ValiderAffectation.php" enctype="multipart/form-data" style="";></P>

 <?php while($ET=mysql_fetch_assoc($rs3)){?>



<input type="hidden" value="<?php echo($ET['anneecode'])?>" name="anneecode" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saisir le matricule de l'étudiant" style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>



<input type="hidden" value="<?php echo("$codes");?>" name="codeentre" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saisir le matricule de l'étudiant" style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="hidden" value="<?php echo($ET['login'])?>" name="entre" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saisir le matricule de l'étudiant" style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>

<label style="font-size:20px;">&nbsp;&nbsp;&bull;&nbsp;&nbsp;NOM</label>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" name="nom" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom" style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>

<label style="font-size:20px;">&nbsp;&nbsp;&bull;&nbsp;&nbsp;POSTNOM</label>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" name="postnom" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postnom " style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>

<label style="font-size:20px;">&nbsp;&nbsp;&bull;&nbsp;&nbsp;PRENOM</label>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" name="prenom" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prenom" style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>

<label style="font-size:20px;">&nbsp;&nbsp;&bull;&nbsp;&nbsp;CLASSE</label>

&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="classe"  style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;">
						
						        <option>G3 INFORMATIQUE INDUSTRIELLE ET RESEAUX</option>
								<option>G3 INFORMATIQUE DE GESTION</option>
								<option>L2 INFORMATIQUE INDUSTRIELLE</option>
								<option>L2 CONCEPTION DES SYSTEMES D'INFORMATION</option>
								<option>L2 INFORMATIQUE INDUSTRIELLE LMD(LPTA)</option>
								
													
 </select></P>







&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="hidden" name="annee"  value="<?php echo($ET['annee'])?>" style="width:340px; height:30px; Border-radius:5px; border:thin; position:absolute; left:310px;"></P>
</P>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

<input type="submit" value="Valider" onclick="affectation()" style="color:#FF0000; height:30px; width:200px; border-color:#0000CC; border:double 1px;; border-radius:5px;"></td>



</P>



</form>


<?php } ?>
</form>





</fieldset>	
</body>
</html>
