<?php
session_start();
Include_once"fnct.php";
connecteur("localhost","dbgesnote","root","");
 $nom=@$_POST['loger']; 
  $message="Saisissez vos paramètres";
  if($nom) {
  		$req="SELECT * FROM tb_user WHERE login='$nom'";
  		$exe=mysql_query($req);
  		if($cnx=mysql_fetch_array($exe)){
   		$passe=$_POST['passer'];
     		$pass2=$cnx['password'];
     		if($passe== $pass2){
      		$actif= $cnx['actif'];
      		if( $actif){
      			$_SESSION['id']= $cnx['id'];
        		$_SESSION['login']= @$nom;
        		if($pass2=="g-inf"){
      			header('Location: departements/dep_gi.html');
      			exit();          
      		    }
      		else if($pass2=="g-elec"){
      			header('Location: accueil/gel_accueil.html');
      			exit();
      			} 
      				else if($pass2=="g-ener"){
      			header('Location: accueil/gen_accueil.html');
      			exit();
      			}
      			else if($pass2=="g-meca"){
      			header('Location: accueil/gm_accueil.html');
      			exit();
      			}
      			else if($pass2=="tele-com"){
      			header('Location: accueil/telecom_accueil.html');
      			exit();
      			}
      			else if($pass2=="passbm"){
      			header('Location: departements/dep_sbm.html');
      			exit();
      			}
      			else if($pass2=="ste-ani"){
      			header('Location: departements/dep_ste.html');
      			exit();
      			}                              
      		    else
      		    {
      			header('Location: index.php');          
      		    exit() ;
      		    }
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
	
	<link rel="stylesheet" type="text/css" href="css/styledefaut.css">
	<link rel="stylesheet" type="text/css" href="css/stylemax1480.css">
	<link rel="stylesheet" type="text/css" href="css/stylemax1240.css">
	<link rel="stylesheet" type="text/css" href="css/stylemax1000.css">
	<link rel="stylesheet" type="text/css" href="css/stylemax400.css">
	
</head>

<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo-et-slogan">
	<img id="logo" src="images/logo_insta.png">
	<p id="slogan">Unité Travail Progrès</p>
	<div id="menu">
	<ul>
	      <li><a href="description/presentation.html">PRESENTATION</a></li>
	      <li><a href="description/enseignement.html">ENSEIGNEMENT</a></li>
	      <li><a href="description/bibliotheque.html">BIBLIOTHEQUE</a></li>
	      <li><a href="description/partenaire.html">PARTENAIRE</a></li>
	      <li><a href="description/recherche.html">RECHERCHE</a></li>
	      
	      <li><a href="departements.html">DÉPARTEMENTS</a>
				   <ul class="dep"> 					   
					   <li><a href="depfree/dep_gi.html">Génie Informatique</a></li>
					   <li><a href="depfree/dep_sbm.html">Sciences Biomedicales</a></li>
					   <li><a href="depfree/dep_ste.html">Sciences de l'Elevage</a></li>
				   </ul>
				</li>
	      
	       
	      
	</ul>
	</div>
	<div id="auth"><h2 align="center">AUTHENTIFIER VOUS SVP!</h2>
                <?php 
                 print $message;
                ?>
<form action="" method="POST" >
<table border="0" align="center" cellspacing="2" cellpadding="2" >
<tr align="center">
<td><input type="text" name="loger" placeholder="login"></td>
</tr>
<tr align="center">
<td><input type="password" name="passer" placeholder="mot de passe"></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" value="connection"></td>
</tr>	 
	 </table>
	 </form></div>
	</div>
	
	</div>
	<div id="main">
	<div id="tete">
	<p id="titre">Institut National Supérieur des Sciences et Techniques d'Abéché</p>
	<img id="banniere" src="images/banniere1.jpg">
	</div>
	<div id="content">
		<h2>Mot de bienvenue du Directeur Général</h2>
	  <img  id="phtdg" src="images/dg.PNG">
	 Bienvenue à l'Institut National Supérieur des Sciences et Techniques d'Abeché (INSTA) ex IUSTA(Institut Universitaire des 
	 Sciences et Techniques d'Abéché). 
	Vous trouvez à travers ce site mis en perspective avec le contexte général relatif au système 
	éducatif tchadien,
ainsi que les motivations ayant conduit les pouvoirs publics à développer depuis
	 1997 la formation professionnelle et technique ; la création de l’Institut National Supérieur des 
	 Sciences et Techniques d’Abéché s’inspirant dans cette logique.Dans la ligne de stratégie de développement, l’INSTA a mis en place un second cycle de formation en 
octobre 2005, placé sous le signe de l’arrimage au système LMD. C’est pourquoi nous avons engagé des
 actions de renforcement des capacités de l’INSTA, notamment l'extension de l'INSTA avec la construction
  d'une dizaine de laboratoires du département des sciences bomédicales et pharmaceutiques, 
  d'une bibliothèque repondant aux nomres internationales; un projet à hauteur d'une dizaine
   de miliards de francs cfa. La mise sur pieds effective de l'école doctorale en 2016 dans 
   le domaine des sciences de l'ingénieur, concrétisent cette phase de croissance de l’Institut.
Ce projet vient renforcer les infrastructures existantes, qui nous permettent de participer efficacement 
à la formation des cadres nécessaires au pays dans les domaines de génie electrique, de génie energetique,
 de génie informatique, de génie mécanique, de télécommunication et multimédia, de l’élevage, de la biologie
  et de la pharmacie appliquées à la santé.
Vous trouverez à travers ce site une représentation plus générale de l'Institut National Supérieur des Sciences et Techniques d'Abéché.

<br/>Merci de votre visite. 
		  
	</div>
<div id="footer">BP 6077 Ndjamena-Tchad     Tel (DG) +235 66 29 05 45 </br>
BP 130 Abeché-Tchad    Tel (DGA) +235 66 36 59 19, (SG) +235 66 26 72 26</br>
Tel (Département Génie Informatique) +235 66 25 22 66 </br> INSTA 2017 &copy;</br></div>
</div>
	<div id="reset"></div>
	
	</div>
</body>
</html>