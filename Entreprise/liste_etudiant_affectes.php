<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>

<script>
document.oncontextmenu = new Function("return false");
</script>


<script language="javascript">

function imprimer(){

document.getElementById("c1").style.display="none";
document.getElementById("c2").style.display="none";
document.getElementById("c11").style.display="none";


var zone=document.getElementById("msgwrite").innerHTML;
var fen=window.open("","","width=1260,height=630,toolbar=0,menubar=0,scrollbar=1,resizable=1,status=0,location=0,left=10,top=10");
fen.document.title="SNEL / RDC";
fen.document.body.innerHTML +="" + zone + "";
fen.window.print();
fen.window.close();

document.getElementById("c1").style.display="inline";
document.getElementById("c11").style.display="inline";
document.getElementById("c2").style.display="inline";
return true;


}





function actualiz(){

window.location="agent.Admin.php";

}



</script>


<?php
require_once("connexion.php");

$codes=$_POST['filtre'];

if($codes==""){

$req1="select * from etudiants where code_entreprise='$codes' ORDER BY `nom` DESC";
$rs1=mysql_query($req1) or die (mysql_error());
}

else
{
$req1="select * from etudiants where code_entreprise='$codes' ORDER BY `nom` DESC";
$rs1=mysql_query($req1) or die (mysql_error());

}
?>

</head>


<body style="color:#666666; margin-left:85px; margin-right:85px; background-color:#999999;">



<div style="background-color:#CCCCCC;">


													
			<center>
			
				 <label style="font-size:45px; text-align:center;">
			
									
			
										SOCIETE NATIONALE D'ELECTRICITE
										
										
             </label>
							             
										 
										
				
				</div>
				
					 </center>
				
			
				
				<div style="background-color:#0000CC; border:groove 1px; border-color:#CCCCCC; color:#FFFFFF;">
							
										
													
		<label style="font-size:25px; text-align:center;">
			
								 <center>		
										STATISTIQUE DES PAIEMENTS DES FACTURES
										
								 </center>		
            </label>
							              
				
				</div>
																																																													
	
	
	
	<center>



<!-- AFFICHAGE STATISTIQUE" -->						
					<!-- AFFICHAGE LISTE" -->	
	
	   <fieldset id="msgwrite" style="width:1250px; top:115px; overflow:auto; border-style:none; display:;" >     
			
									<legend style="font-size:40px; color:#FF0000; background-color:;">STATISTIQUE:&nbsp;&nbsp;<?php echo($codes)?>
							
							&nbsp;&nbsp;&nbsp;
							
							<img src="printer.ico" id="c1" width="60px" height="25px;" onclick="imprimer()">
							
							&nbsp;&nbsp;&nbsp;
							
							<img src="closee.JPG" id="c11" width="60px" height="25px;" onclick="actualiz()">
								</legend>
		<table border="thick 1%" id="liste" cellpadding="" style="position:absolute; width:1150px; text-align:center;">					
		
		
		<th bgcolor="#000099" style="color:#FFFFFF;" ></th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >NOM</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >CLASSE</th>
		<th bgcolor="#000099" style="color:#FFFFFF;" >ANNEE</th>
				
				<?php while($ET1=mysql_fetch_assoc($rs1)){?>
						
					<tr>	<td>-</td><td><?php echo($ET1['nom'])?></td><td><?php echo($ET1['classe'])?></td>
					         <td><?php echo($ET1['annee_academique'])?></td> 
							<td><a href="MonProfilAlleur.php?nutil=<?php echo($ET1['nutil'])?>">Voir</a></td>
							
					
					
					
					</tr>
							
				<?php } ?>					
	
		</table>		
				
	</fieldset>
				
					
<!-- FIN AFFICHAGE LISTE" -->	
					
	<!-- FIN AFFICHAGE STAT" -->											
		 </center>			

</body>
</html>
