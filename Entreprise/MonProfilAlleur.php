<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mon Profil</title>

<link rel="shortcut icon" href="logo.jpg" />


<?php


require_once("connexion.php");

$nutil=$_GET["nutil"];

$req3="SELECT * FROM `etudiants` where nutil='$nutil'";
$rs3=mysql_query($req3) or die (mysql_error());


if ($u=mysql_fetch_assoc($rs3)){


$req="SELECT * FROM `etudiants` where nutil='$nutil'";
$rs2=mysql_query($req) or (die(mysql_error()));

}
else
{

echo "

<table style='position:absolute; top:300px; left:150px; font-size:25px; ' >
<tr>
<td> Cet utilisateur n'a encore de profil activé ... </td>
</tr>
</table>

";


}

?>








</head>

<body style="color:#000099; border-style:none; margin-left:50px; margin-right:50px; background-color:#F6F6F6;">

<div style="background-color:#CCFF66; border:groove 1px; border-color:#000099; border-style:none;">
							
							
										
													
			<img src="AppImages/logo.jpg" width="60px" height="34px;">
			
			<label style="font-size:34px; text-align:center;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										
			
										PROFIL UTILISATEUR NIfasCom
										
										
            </label>
							             
										 
										
				
				</div>
				



      <br/>

				 

   
   
  
   
   
   
   
   
   
   
   
   
   
   <fieldset style="position:absolute; top:75px; width:900px; border-color:#00FF00; color:#00FF00;">
   
  
   
   <legend style="font-size:25px; color:#FF0000;">PROFIL UTILISATEUR</legend>
   
   
   
    <?php while($ET=mysql_fetch_assoc($rs2)){?>
   
   
   
   
   

				<form action="" method="">
										
						
						&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">LOGIN <label style="color:#FF0000;">*</label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
						<input type="text" readonly="true" readonly="true" name="loginee" value="<?php echo($ET['login'])?>" id="anlog" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px;">	
						
						
						<input type="text" readonly="true" name="anlog" value="<?php echo($ET['login'])?>" id="anlog" placeholder="saisir un nouveau login" style="width:180px; height:25px; color:#000099; position:absolute; left:450px; display:none;">	
						
					
						
						<p/>
												 				
										
									
									
									
									
										&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">NOM:<label style="color:#FF0000;">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
						<input type="text" readonly="true" name="nom"  value="<?php echo($ET['nom'])?>" id="nom" placeholder="Mon nom" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px;">	
												 				
										

						<input type="text" readonly="true" name="post"  value="<?php echo($ET['postnom'])?>" id="post" placeholder="Mon postnom" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; background-color:#F6F6F6; left:400px">	
												 				
							  
											
						<input type="text" readonly="true" name="pre"  value="<?php echo($ET['prenom'])?>" id="pre" placeholder="Mon prenom" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:600px">	<p/>
								
								
								
												 				
										
									
									   &nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">NUTIL: <label style="color:#FF0000;">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
						<input type="text" readonly="true" name="nutil"  value="<?php echo($ET['nutil'])?>" id="nutil" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px">	<p/>
						
						
						
						
						
									
									
										&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">SEXE: <label style="color:#FF0000;">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
						<input type="text" readonly="true" name="sexe" id="sexe"  value="<?php echo($ET['sexe'])?>" id="sexe" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px">	
											
								<p/>
									
									
										
										
										
										&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">PROMO: <label style="color:#FF0000;">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
						<input type="text" readonly="true" name="promo" id="promo" value="<?php echo($ET['promo'])?>" id="promo" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px">	<p/>
						
						
						
						
									
										&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">PHOTO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
						<input type="text" readonly="true" name="imge" id="imge" style="width:180px; height:25px; background-color:#F6F6F6; color:#000099; border-style:none; position:absolute; left:200px">	<p/>
												 				
										
									
									
									
									   &nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">TEL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
									   

						
	
											
						<input type="text" readonly="true" name="telnum" value="<?php echo($ET['promo'])?>" id="anlog" style="width:110px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px">	<p/>
												 				
										
									
							
							
							
							&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">NE A:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
				 <input type="text" readonly="true" name="lieuness" value="<?php echo($ET['lieudeness'])?>" id="lieuness" placeholder="exemple: danykambere" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px"><p/>
					 
						
						
						&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> 
						
									
						<input type="text" readonly="true" name="datenaiss" value="<?php echo($ET['datenaiss'])?>" id="lieuness" placeholder="exemple: danykambere" style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px"><p/>
					 
									
									
									<p/>
									
									
									
									
									
									&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:#00CC00;">NATIONALITE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>  
											
					 <input type="text" readonly="true" name="national" value="<?php echo($ET['nationalite'])?>" id="national" value="Congolaise"style="width:180px; background-color:#F6F6F6; height:25px; color:#000099; border-style:none; position:absolute; left:200px">
					 
					 
					   
												
												 	<p/>
												 
											
											
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
											
						<label style="font-size:20px; color:#003333; position:absolute; left:500px; top:260px; color:#00CC00;">STATUT<label>
						
						<p/>
						
						
						
						<textarea name="statut"  readonly="true" placeholder="Ecrire votre statut ici..." style="width:380px; height:150px; background-color:#F6F6F6; color:#000099; border-style:none; position:absolute; left:500px; top:300px;"> <?php echo($ET['statut'])?></textarea>
											
						
						
						

										
	               </form>


         <?php } ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <form action="ListeUsers.php" method="post"> 
				
						
						
						<input type="hidden" name="fauxchamp" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Saisir Votre mot de passe" style="height:40px; width:300px; text-align:center. border-style:none; color:#000099;"><p/>
						
						<input type="hidden" name="delcmp" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Saisir Votre mot de passe" style="height:40px; width:300px; text-align:center. border-style:none; color:#000099;">
						<input type="hidden" name="cmp1" id="">
						<input type="hidden" name="cmp2" id="">
						<input type="hidden" name="cmp3" id="">
						
						<input type="hidden" name="finduser" id="">
						
						
						<p/>

						
						<input type="submit" value="X" style=" height:35px; width:40px; border-radius:5px; border-style:none; background-color:#FF0000; color:#FFFFFF; position:absolute; left:880px; top:15px; border-radius:50px;">
						
				
						
						
				</form>
				
				
		 
		 
</fieldset>	






<br/>


</center>

</body>
</html>
