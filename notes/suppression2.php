<html>
<title >suppression</title>
<head ><meta charset="utf-8"></head>
<?php
//connection au serveur:
$cnx = mysql_connect( "localhost", "root", "" ) ;
//sélection de la base de données:
$db = mysql_select_db( "dbgesnote" ) ;
//récupération de la variable d'URL,
//qui va nous permettre de savoir quel enregistrement supprimer:
$id = $_GET["Matricule"] ;
//requête SQL:
$sql = "DELETE
FROM tbnote
WHERE matricule = ".$id ;
//echo $sql ;
//exécution de la requête:
$requete = mysql_query( $sql, $cnx ) ;
//affichage des résultats, pour savoir si la suppression a marchée:
if($requete)
{
echo("La suppression à été correctement effectuée") ;
}
else
{
echo("La suppression à échouée") ;
}
?>
</html>