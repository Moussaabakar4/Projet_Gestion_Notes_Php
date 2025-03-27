<?php
//connection au serveur
$cnx = mysql_connect( "localhost", "root", "" ) ;
//sélection de la base de données:
$db = mysql_select_db( "dbgesnote" ) ;
//récupération des valeurs des champs:
$nouveaulogin = @$_POST["nouveaulogin"] ;
$nouveaupass = @$_POST["nouveaupass"] ;
$ancienlogin = @$_POST["ancienlogin"] ;
$ancienpass = @$_POST["ancienpass"] ;
$id= @$_POST["id"] ;
//création de la requête SQL:
$sql = "UPDATE tb_admin
SET login = '$nouveaulogin',
password = '$nouveaupass'
WHERE id = '$id' AND login='$ancienlogin' AND password='$ancienpass' " ;
//exécution de la requête SQL:
$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
if($requete)
{
echo("La modification à été correctement effectuée") ;
}
else
{
echo("La modification à échouée") ;
}
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
	       <li><a href="../description/presentation.html">PRESENTATION</a></li>
	      <li><a href="../description/enseignement.html">ENSEIGNEMENT</a></li>
	      <li><a href="../description/bibliotheque.html">BIBLIOTHEQUE</a></li>
	      <li><a href="../description/partenaire.html">PARTENAIRE</a></li>
	      <li><a href="../description/recherche.html">RECHERCHE</a></li>
	</ul>
	</div>
	</div>
	<div id="main">
	<div id="tete">
	<p id="titre">Institut National Supérieur des Sciences et Techniques d'Abéché</p>
	<img id="banniere" src="../images/banniere1.jpg">
	</div>
	<div id="content">
	<h2>Modification login et password</h2>
<form   method="POST">
<table border="0" align="center" cellspacing="2" cellpadding="2">

<tr align="center">
<td>Identifiant</td>
<td><input type="text" required name="id" ></td>
</tr>

<tr align="center">
<td>Ancien Login</td>
<td><input type="text" required name="ancienlogin" ></td>
</tr>

<tr align="center">
<td>Ancien Mot de passe</td>
<td><input type="text" required name="ancienpass" ></td>
<tr/>


<tr align="center">
<td>Nouveau Login</td>
<td><input type="text" required name="nouveaulogin" ></td>
</tr>

<tr align="center">
<td>Nouveau Mot de passe</td>
<td><input type="text" required name="nouveaupass" ></td>
</tr>




<tr align="center">
<td colspan="2"><input type="submit" value="changer"></td>
</tr>
</table>
</form>
<a href="affichagenote.php">Voir la liste des notes</a>
		  
	</div>
	<div id="footer">BP 6077 Ndjamena-Tchad     Tel (DG) +235 66 29 05 45 </br>
BP 130 Abeché-Tchad    Tel (DGA) +235 66 36 59 19, (SG) +235 66 26 72 26</br>
Tel (Département Génie Informatique) +235 66 25 22 66 </br> INSTA 2017 &copy;</br></div>
	</div>
	<div id="reset"></div>
	
	</div>
</body>
</html>