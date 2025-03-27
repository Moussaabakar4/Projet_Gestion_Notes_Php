<?php
session_start();
Include_once"fnct.php";
connecteur("localhost","dbgesnote","root","");
 $nom=@$_POST['loger']; 
  $message="Saisissez vos paramètres";
  if($nom) {
  		$req="SELECT * FROM tb_admin WHERE login='$nom'";
  		$exe=mysql_query($req);
  		if($cnx=mysql_fetch_array($exe)){
   		$passe=$_POST['passer'];
     		$pass2=$cnx['password'];
     		if($passe== $pass2){
      		$actif= $cnx['actif'];
      		if( $actif){
       		$_SESSION['id']= $cnx['id'];
        		$_SESSION['login']= @$nom;
      		header('Location: ajout.html');
      		exit() ; 
      	}
      	else
       		$message="votre compte est veroullé!";
      }
      else
        $message="mode de passe incorrect!";
  }
  else
       {$message="login incorrect";}
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
	
	</div>
	<div id="main">
	<div id="tete">
	<p id="titre">Institut National Supérieur des Sciences et Techniques d'Abéché</p>
	<img id="banniere" src="../images/banniere1.jpg">
	</div>
	<div id="content">
	<h2>AUTHENTIFIER VOUS POUR GERER LES NOTES DES ETUDIANTS</h2>
                <?php 
                 print $message;
                ?>
<form action="" method="POST" >
<table border="0" align="center" cellspacing="2" cellpadding="2" >
<tr align="center">
<td>Login</td>
<td><input type="text" name="loger"></td>
</tr>
<tr align="center">
<td>Mot de passe</td>
<td><input type="password" name="passer"></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" value="connection"></td>
</tr>	 
	 </table>
	 </form>
		  
	</div>
	<div id="footer">BP 6077 Ndjamena-Tchad     Tel (DG) +235 66 29 05 45 </br>
BP 130 Abeché-Tchad    Tel (DGA) +235 66 36 59 19, (SG) +235 66 26 72 26</br>
Tel (Département Génie Informatique) +235 66 25 22 66 </br> INSTA 2017 &copy;</br></div>
	</div>
	<div id="reset"></div>
	
	</div>
</body>
</html>