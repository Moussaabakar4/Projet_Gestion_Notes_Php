<?php 
 function connecteur($serveur,$bdd,$user,$pass){
  $cnx=mysql_connect($serveur,$user,$pass);
  if($cnx){
    $bdd=mysql_select_db( $bdd, $cnx);
    if(!$bdd)
    echo"base de donnees introuvable".mysql_error();
    else
    echo"connection etablie!";
  }
  else
   echo"impossible d'atteindre le serveur!";
  
 }
?>