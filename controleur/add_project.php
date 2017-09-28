<?php
// include_once '../vue/template/header.php';
include_once '../vue/addproject_vu.php';
if(isset($_POST['nom']) AND isset($_POST['client']) AND isset($_POST['date_debut']) AND isset($_POST['date_fin']) )
{

  $nom=htmlspecialchars($_POST['nom']);
  $client=htmlspecialchars($_POST['client']);
  $date_debut=htmlspecialchars($_POST['date_debut']);
  $date_fin=htmlspecialchars($_POST['date_fin']);

  add_projet($nom, $client,$date_debut, $date_fin);

}
//add  steps for project
 

?>