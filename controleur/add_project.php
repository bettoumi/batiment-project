<?php
require '../modele/get_project.php';
              ///ADD PROJECT IN DATABASE
  /////////////////////////////////////////////////
if(isset($_POST['nom']) AND isset($_POST['client']) AND isset($_POST['date_debut']) AND isset($_POST['date_rendu']) )
{

  $nom=htmlspecialchars($_POST['nom']);
  $client=htmlspecialchars($_POST['client']);
  $date_debut=htmlspecialchars($_POST['date_debut']);
  $date_fin=htmlspecialchars($_POST['date_rendu']);
 

  add_projet($nom, $client, $date_debut, $date_fin);
   header('location: index.php');
 
  
}


 
 //add  steps for project
 ////////////////////////////////////
 if(isset($_POST['nomtache']) AND isset($_POST['idetape']) AND isset($_POST['idprojet']) )
{
   
  $nomtache=htmlspecialchars($_POST['nomtache']);
  $idetape=(int)htmlspecialchars($_POST['idetape']);
  $idprojet=(int)htmlspecialchars($_POST['idprojet']);

 

  add_tache($nomtache, $idetape, $idprojet);
  //header('location: add_project.php');
  
}

?>