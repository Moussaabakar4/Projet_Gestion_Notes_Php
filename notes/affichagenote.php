<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>internet</title>
	<meta charset="utf-8" >
	
	<link rel="stylesheet" type="text/css" href="../css/styledefaut.css">
	<link rel="stylesheet" type="text/css" href="../css/stylemax1480.css">
	<link rel="stylesheet" type="text/css" href="../css/stylemax1240.css">
	<link rel="stylesheet" type="text/css" href="../css/stylemax1000.css">
	<link rel="stylesheet" type="text/css" href="../css/stylemax400.css">
	<script language="javascript">
function confirme( identifiant )
{
var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
if( confirmation )
{
document.location.href = "suppression2.php?Matricule="+identifiant ;
}
}
</script>
	
</head>

<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo-et-slogan">
	<img id="logo" src="../images/logo_insta.png">
	<p id="slogan">Unité Travail Progrès</p>
	</div>
	<div id="menu">
	<ul>
	      <li><a href="../index.php">DECONNEXION</a></li>
	</ul>
	</div>
	</div>
	<div id="main">
	<div id="tete">
	<p id="titre">Institut National Supérieur des Sciences et Techniques d'Abéché</p>
	<img id="banniere" src="../images/banniere1.jpg">
	</div>
	<div id="content">
	






<h2>MODIFICATION ET SUPPRESSION</h2>
<form   method="POST">
<table border="0" align="center" cellspacing="2" cellpadding="2">
<tr align="center">
<td>Entrez le code de la matière</td>
<td><input type="text"  required name="codematiere" ></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" value="rechercher"></td>
</tr>
</table>
</form>
                <?php
//connection au serveur:
$cnx = mysql_connect( "localhost", "root", "" ) ;
//sélection de la base de données:
$db = mysql_select_db( "dbgesnote" ) ;
$codematiere=@$_POST["codematiere"];
//requête SQL:
$sql = "SELECT *
FROM tbnote WHERE codematiere='$codematiere'" ;

//exécution de la requête:
$requete = mysql_query( $sql, $cnx ) ;

   $table='<table  border="1" width=100%>
   <tr bgcolor="cyan"><td width=20% align="center">Nom</td><td width=20% align="center">Prenom</td><td  width=10% align="center">CodeMatiére</td><td width=10% align="center">Controle</td><td width=10% align="center">Examen</td><td width=10% align="center">TP</td><td></td><td></td></tr>';
   $lignes='';
//affichage des données:


while( $elmt = mysql_fetch_array( $requete ) )
{


$lignes.='<tr>';
   	$lignes.='<td width=20% align="center">'.$elmt['nom'].'</td>';
   	$lignes.='<td width=20% align="center">'.$elmt['prenom'].'</td>';
   	$lignes.='<td width=10% align="center">'.$elmt['codematiere'].'</td>';
   	$lignes.='<td width=10% align="center">'.$elmt['controle'].'</td>';
   	$lignes.='<td width=10% align="center">'.$elmt['examen'].'</td>';
   	$lignes.='<td width=10% align="center">'.$elmt['tp'].'</td>';
      $lignes.='<td width=10% align="center"><a href="modification2.php?Matricule='.$elmt['matricule'].'">modifier</a></td>';
      $lignes.='<td width=10% align="center"><a href="#" onClick=confirme('.$elmt['matricule'].')>supprimer</a></td>';
   	$lignes.='</tr>';
}
 $table.=$lignes.'</table>';
   echo $table;


?>
<a href="ajout.html">Ajout</a>
		  
	</div>
<div id="footer">BP 6077 Ndjamena-Tchad     Tel (DG) +235 66 29 05 45 </br>
BP 130 Abeché-Tchad    Tel (DGA) +235 66 36 59 19, (SG) +235 66 26 72 26</br>
Tel (Département Génie Informatique) +235 66 25 22 66 </br> INSTA 2017 &copy;</br></div>
	</div>
	<div id="reset"></div>
	
	</div>
</body>
</html>