
<?php
//connection au serveur:
$cnx = mysql_connect( "localhost", "root", "" ) ;
//sélection de la base de données:
$db = mysql_select_db( "dbgesnote" ) ;
//récupération de la variable d'URL,
//qui va nous permettre de savoir quel enregistrement modifier
$id = @$_GET["Matricule"] ;
//requête SQL:
$sql = "SELECT *
FROM tbnote
WHERE matricule = '$id'" ;
//exécution de la requête:
$requete = mysql_query( $sql, $cnx ) ;
//affichage des données:
if( $result = mysql_fetch_object( $requete ) )
{
/*?>

<?php*/
}//fin if
?>



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
	     <li><a href="#">LEPREMIERLIEN1</a></li>
	     <li><a href="#">LEPREMIERLIEN2</a></li>
	     <li><a href="#">LEPREMIERLIEN3</a></li>
	     <li><a href="#">LEPREMIERLIEN4</a></li>
	     <li><a href="../programmes/matieres.html">Tables de Matières</a></li>
	</ul>
	</div>
	</div>
	<div id="main">
	<div id="tete">
	<p id="titre">Institut National Supérieur des Sciences et Techniques d'Abéché</p>
	<img id="banniere" src="../images/banniere1.jpg">
	</div>
	<div id="content">
<form name="" action="modification3.php" method="POST">
<input type="hidden" name="matricule" value="<?php echo($id) ;?>">
<table border="0" align="center" cellspacing="2" cellpadding="2">
<tr align="center">
<td>nom</td>
<td><input type="text" name="nom" value="<?php echo($result->nom) ;?>"></td>
</tr>
<tr align="center">
<td>prenom</td>
<td><input type="text" name="prenom" value="<?php echo($result->prenom) ;?>"></td>
</tr>
<tr align="center">
<td>CodeMatiére</td>
<td><input type="text" name="codematiere" value="<?php echo($result->codematiere) ;?>"></td>
</tr>
<tr align="center">
<td>Controle</td>
<td><input type="text" name="controle" value="<?php echo($result->controle) ;?>"></td>
</tr>
<tr align="center">
<td>Examen</td>
<td><input type="text" name="examen" value="<?php echo($result->examen) ;?>"></td>
</tr>

<tr align="center">
<td>TP</td>
<td><input type="text" name="tp" value="<?php echo($result->tp) ;?>"></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" value="modifier"></td>
</tr>
</table>
</form>
		  
	</div>
	<div id="footer">webmaster-webmaster-webmaster-webmaster-webmaster</div>
	</div>
	<div id="reset"></div>
	
	</div>
</body>
</html>