<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LISTE DES UTILISATEURS</title>

<link rel="shortcut icon" href="logo.jpg" />


<script>
function changepassword(){

window.location="ErreurVerifProv.php";

}



function messagerecu(){

window.location="MessageRecu.php";

}

</script>

<script language="javascript">
function imprimer(){
var zone=document.getElementById("liste").innerHTML;
var fen=window.open("","","width=1100,height=650,toolbar=0,menubar=0,scrollbar=1,resizable=1,status=0,location=0,left=10,top=10");
fen.document.title="LES UTILISATEURS NIfasInfo";
fen.document.body.innerHTML +="" + zone + "";
fen.window.print();
fen.window.close();
return true;
}
</script>

</head>

<body style="color:#0000CC; margin-left:25px; margin-right:25px; background-color:#F6F6F6;">



<?php
require_once("connexion.php");

$finduser=$_POST['finduser'];

$req1="select * from etudiants WHERE `nom` LIKE '$finduser%' or `nom` = '$finduser'  or `nutil` LIKE '$finduser%' or nutil= '$finduser' or `promo` = '$finduser' or `tel` = '$finduser'  or `prenom` = '$finduser'  or `postnom` = '$finduser' ORDER BY `nom` ASC" ;
$rs1=mysql_query($req1) or die (mysql_error());
?>


				<div style="background-color:#CCFF66; border:groove 1px; border-color:#000099;">
							
							
										
													
			<img src="AppImages/logo.jpg" width="60px" height="34px;">
			
			<label style="font-size:34px; text-align:center;">
			
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;
			
										NIfasCom&nbsp;&nbsp;&nbsp;&nbsp;Plate de communication
										
										
            </label>
							             
										 
										
				
				</div>
				
				
				
				
				
				<div style="background-color:#CCFF66; border:groove 1px; border-color:#000099;">
							
										
													
													<label style="font-size:24px;">
													
													
										
										             
													 
													 
		     
													 
			
			
			
			
			<form action="Fichier.php" method="post">
			
						&nbsp;&nbsp;<input type="button" value="VALVE" style=" height:30px; background-color:#000099; color:#FFFFFF;  width:100px; border-radius:5px; border-style:none;" onclick="test()">&nbsp;
                       
						
						
						
						
						<img src="AppImages/Email.png" width="60px" height="30px;"  style=" height:30px; width:100px; border-radius:5px; border-style:none;" onclick="messagerecu()">
						
						
						
						
				        <input type="button" value="Changer MP ou Login" style=" height:30px; background-color:#000099; color:#FFFFFF;  width:140px; border-radius:5px; border-style:none;" onclick="changepassword()">&nbsp;
				
						
						Trouver un fichier
							
							<input type="text" name="code" placeholder="votre code" style="width:90px; height:20px; border-radius:5px; border-style:none;">
							
							<select name="crit">
						        
								<option></option>
								<option>Tous</option>
						        <option>G1</option>
								<option>G2</option>
								<option>G3</option>
								<option>L1</option>
								<option>L2</option>
												
						</select>
						
						/ Perso
						
					            <input type="text" name="perso" placeholder="login/code reception" style="height:20px; border-radius:5px; border-style:none;">
								
					
						
								<input type="submit" value="Searchs" style=" background-color:#000099; color:#FFFFFF; border-style:none; height:21px;">
			</form>
					
					
					
							                         </label>
							
							              
				
				</div>
			
				


<!-- AJOUT DU CODE CMP" -->

												
													<label style="font-size:10px;">
										
										
							                         </label>
							             
			
			
			
										 
			<form action="AccueilEtud.php" method="post" id="">
			
			
							
			<input type="hidden" name="cmp1" id="cmp1">
			<input type="hidden" name="cmp2" id="cmp2">
			<input type="hidden" name="cmp3" id="cmp3">								
									
											
			<input type="hidden" name="fauxchamp" id="">
			<input type="hidden" name="delcmp" id="">
			
<img src="AppImages/printer.ico" width="60px" height="30px;"  style=" height:40px; width:60px; border-radius:5px; border-style:none; ; color:#FFFFFF; position:absolute; left:120px; top:90px;" onclick="imprimer()"><input type="submit" value="MES CMP" style=" height:30px; background-color:#000099; color:#FFFFFF;  width:100px; border-radius:5px; border-style:none; position:absolute; left:260px; top:100px;" onclick="">&nbsp;&nbsp; </label>


            </form>	
				
				
    
		

<!-- FIN AJOUT DU CODE CMP" -->

				
				
				
<!-- AFFICHAGE DU CODE CMP" -->

												
													<label style="font-size:24px;">
										
										
							                         </label>
							             
			
			
			
										 
			<form action="AccueilEtud.php" method="post" id="formcmp">
			
			
							
									
											
			<input type="hidden" name="fauxchamp" id="fauxchamp">
			<input type="hidden" name="delcmp" id="">
			
			<input type="hidden" name="cmp1" id="">
			<input type="hidden" name="cmp2" id="">
			<input type="hidden" name="cmp3" id="">
			
<label onblur="test()">&nbsp;&nbsp;<input type="submit" value="MES CMP" style=" height:30px; background-color:#000099; color:#FFFFFF;  width:100px; border-radius:5px; border-style:none; position:absolute; left:260px; top:100px;" onclick="">&nbsp;&nbsp; </label>

            </form>	
				
				       <hr>
    
		

<!-- FIN AFFICHAGE DU CODE CMP" -->








<!-- RETOUR ACCUEIL" -->



	                     
							    	
													
													<label style="font-size:24px;">
										
										
							                         </label>
							             
										 
			<form action="AccueilEtud.php" method="post" id="">
									
											
			<input type="hidden" name="delcmp" id="">
			<input type="hidden" name="fauxchamp" id="">
			
			
			<input type="hidden" name="cmp1" id="">
			<input type="hidden" name="cmp2" id="">
			<input type="hidden" name="cmp3" id="">
			
<label onblur="test()">&nbsp;&nbsp;<input type="submit" value="ACCUEIL" style=" height:30px; background-color:#000099; color:#FFFFFF;  width:100px; border-radius:5px; border-style:none; position:absolute; left:400px; top:100px;" onclick="deletecmp()">&nbsp;&nbsp; </label>

            </form>	
				
				      
    


					

<!-- FIN RETOUR ACCUEIL" -->





		
				
				
	<!-- AFFICHAGE LISTE" -->	
	
	   <div style="width:810px; position:fixed;bottom:100px;left:47px; top:165px; overflow:auto; overflow:auto;">     
			
									<label style="font-size:25px; color:#FF0000;">LISTE DES UTILISATEURS NIfasInfo:</label>
		<table border="thick 1%" id="liste" cellpadding="" style="position:absolute; width:800px; text-align:center;">					
		
		
		<th bgcolor="#000099" style="color:#FFFFFF;" >NOM</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >POSTNOM</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >PRENOM</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >TITRE</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >NUTIL</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >PROMOTION</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >TELEPHONE</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >PROFIL</th>		
				<?php while($ET1=mysql_fetch_assoc($rs1)){?>
						
					<tr>	<td><?php echo($ET1['nom'])?></td><td><?php echo($ET1['postnom'])?></td><td><?php echo($ET1['prenom'])?></td>
					         <td><?php echo($ET1['titre'])?></td> <td><?php echo($ET1['nutil'])?></td>
					        <td><?php echo($ET1['promo'])?></td><td><?php echo($ET1['tel'])?></td>
							<td><a href="MonProfilAlleur.php?nutil=<?php echo($ET1['nutil'])?>">Voir</a></td>
							
					
					
					
					</tr>
							
				<?php } ?>					
	
		</table>		
				
		</div>
				
					
<!-- FIN AFFICHAGE LISTE" -->	




<!-- AFFICHAGE DE LA LISTE DES CODES CMP" -->						
					<fieldset id="fel" style="width:220px; position:fixed;bottom:100px;right:46px; top:165px; overflow:auto;" onclick="t2()">
					
					        <legend style="font-size:20px; color:#FF0000;">NIfasInfo</legend><hr>
						
						<img src="AppImages/nad2.JPG" width="200px" height="190px;" onclick="ajouterCMP()"><br/>
						<img src="AppImages/logo.jpg" width="200px" height="145px;" onclick="ajouterCMP()">
						
							
					</fieldset>
					
					
	<!-- FIN AFFICHAGE DE LA LISTE DES CODES CMP" -->						
					
</body>
</html>
