<html >
<title>
<head >meta charset='utf-8'</head>
</title>
<?php
//connection au serveur
$cnx = mysql_connect( "localhost", "root", "" ) ;
//sélection de la base de données:
$db = mysql_select_db( "dbgesnote" ) ;
//récupération des valeurs des champs:
//matricule:
$matricule = $_POST["matricule"] ;
//nom:
$nom = @$_POST["nom"] ;
//prenom:
$prenom = $_POST["prenom"] ;
//adresse:
$codematiere = @$_POST["codematiere"] ;
$controle = $_POST["controle"] ;
$examen = $_POST["examen"] ;
$tp = $_POST["tp"] ;

//création de la requête SQL:
$sql = "INSERT INTO tbnote (matricule,nom, prenom, codematiere,controle,examen,tp)
VALUES ('$matricule', '$nom', '$prenom', '$codematiere', '$controle', '$examen', '$tp') " ;
//exécution de la requête SQL:
$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si l'insertion a marchée:
if($requete)
{
echo("L'insertion a été correctement effectuée") ;
}
else
{
echo("L'insertion à échouée") ;
}
?>
</html>