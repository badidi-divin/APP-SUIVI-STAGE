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
function retour(){

window.location="Accueil.php";

}



function tabpaie(){

window.location="TablePaie.php";

}



</script>



</head>

<body onload="test4()" style="color:#000000; margin-left:70px; margin-right:70px; font-size:24px; background-color:#CCCCCC;">
<?php


require_once("connexion.php");
$annee=$_POST['annee'];

$req3="SELECT * FROM `code_entreprises` where annee='".$annee."'  ORDER BY `login` ASC";
$rs3=mysql_query($req3) or die (mysql_error());

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
												GESTION DES STAGIAIRES 
										
								 </center>		
            </label>
							              
				
				</div><p/>

			

	
 
  <!-- CHOIX DU COMPTE A CREER" -->             
                         
						 
						 
	

						
						
						
						
				
						
						<input type="button" value="ACCUEIL" style=" height:30px; background-color:#000099; color:#FFFFFF; width:110px; border-radius:5px; border-style:none;" onclick="retour()">
						
						
						
						
						
						
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="annee" id="idfil" style="width:200px; height:25px; color:#FFFFFF; position:absolute; left:200px; background:none; border-color:#0000CC; text-align:center; display:none;">
                                <option>2020</option>
								<option>2021</option>
								<option>2022</option>
								<option>2023</option>
								<option>2024</option>
                        </select>
&nbsp;&nbsp;
						<input type="button" value="IMPRIMER" id="imprimer" style=" height:30px; background-color:#000099; color:#FFFFFF; width:110px; border-radius:5px; border-style:none; display:o;" onclick="initialisee()">
						
						
						


					
						<hr>


<!-- FIN CHOIX DU COMPTE A CREER" -->
	 
		 
		 		
				
				
	<!-- AFFICHAGE LISTE" -->	
	<fieldset id="listeusers" style="width:900px; position:obsolute;left:55px; top:50px; overflow:auto; display:inline;">
					
					        <legend style="font-size:20px; background-color:#000000; color:#FFFFFF;">LISTE DES ENTREPRISES:</legend><hr>
	      
								
									
									
									<label></label>
									<p>
		<table border="" id="liste" cellpadding="" style="width:900px; text-align:center; font-size:20px; background-color:#D7D7D7;">					
		
		<th bgcolor="#000000" style="color:#FFFFFF;" ></th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >LOGIN</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >ANNEE</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" >MOT DE PASSE</th>
		<th bgcolor="#000000" style="color:#FFFFFF;" ></th>
		<th bgcolor="#000000" style="color:#FFFFFF;" ></th>
		<th bgcolor="#000000" style="color:#FFFFFF;" ></th>		
				<?php while($ET1=mysql_fetch_assoc($rs3)){?>
						
					<tr>	<td onclick="actualiz()" style="color:#000000;" >&bull;</td>
					        <td style="color:#000099;" style="color:#000000;"  ><?php echo($ET1['login'])?></td>
							<td style="color:#000099;" style="color:#000000;"  ><?php echo($ET1['annee'])?></td>
							<td style="color:#000099;" ><?php echo($ET1['motdepasse'])?></td>
					
							
							
							<td><a href="affectation.php?motdepasse=<?php echo($ET1['motdepasse'])?>">Affecter</a></td>
				
					
					         <td><a href="liste.php?motdepasse=<?php echo($ET1['anneecode'])?>">Liste</a></td>
							 <td><a href="fiches-tous.php?motdepasse=<?php echo($ET1['anneecode'])?>">Print Fiches</a></td>
					</tr>
							
				<?php } ?>					
	
		</table>		
				
		</fieldset>
					
					        			
	
</center>


</body>
</html>
