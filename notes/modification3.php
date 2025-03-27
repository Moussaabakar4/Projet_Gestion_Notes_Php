<html>
<head>
<title>modification de données en PHP :: partie2</title>
<meta charset="utf-8">
</head>
<body>
<?php
//connection au serveur
$cnx = mysql_connect( "localhost", "root", "" ) ;
//sélection de la base de données:
$db = mysql_select_db( "dbgesnote" ) ;
//récupération des valeurs des champs:
$nom = $_POST["nom"] ;
$prenom = $_POST["prenom"] ;
$codematiere = $_POST["codematiere"] ;
$controle = $_POST["controle"] ;
//numéro de téléphone:
$examen = $_POST["examen"] ;
$tp = $_POST["tp"] ;
//récupération de l'identifiant de la personne:
$id =@ $_POST["matricule"] ;
//création de la requête SQL:
$sql = "UPDATE tbnote
SET nom = '$nom',
prenom = '$prenom',
codematiere = '$codematiere',
controle = '$controle',
examen = '$examen',
tp = '$tp'
WHERE matricule = '$id' " ;
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
</body>
</html>