<?php
require '../modele/get_project.php';
include_once '../vue/template/header.php';
 

 $id_project=htmlspecialchars($_GET['id']);
 $nom_project=htmlspecialchars($_GET['titre']);
 // idetape=htmlspecialchars($_POST['idetape']);
 // echo $idetape;
   
  
  
   $steps=affich_etape($id_project);
   $req2=affiche_tache();
 // header('location:add_project.php');
 







              ///ADD PROJECT IN DATABASE
  //////////////////////////////////////////////////////////////////////////
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
 ///////////////////////////////////////////////////////////////////////
 if(isset($_POST['nometape'])  AND isset($_POST['idprojet']) )
{
   
  $nometape=htmlspecialchars($_POST['nometape']);
  $idprojet=htmlspecialchars($_POST['idprojet']);

 var_dump($nometape);
 var_dump( $idprojet);

  add_etape($nometape, $idprojet);
   header('location: ');
  
}
 
 
 						///add spots for steps
 if(isset($_POST['nomtache']) AND isset($_POST['idetape']) AND isset($_POST['idprojet']) )
{
   
  $nomtache=htmlspecialchars($_POST['nomtache']);
  $idetape=htmlspecialchars($_POST['idetape']);
  $idprojet=htmlspecialchars($_POST['idprojet']);

 

  add_tache($nomtache, $idetape, $idprojet);
   header('location: '); 
  
}

				// DELETE  steps  from project
 ///////////////////////////////////////////////////////////////////////
   
 if(isset($_POST['idetapesup'])AND isset($_POST['idproject_etape']))
   {
    
     $idetapesup=htmlspecialchars($_POST['idetapesup']);
     $idproject_etape=htmlspecialchars($_POST['idproject_etape']);
    

     supprimer_etape($idetapesup, $idproject_etape); 
     
     header('location: ');


  }
   	// DELETE  spots  from steps
 //////////////////////////////////////////////////////////////////////

if(isset($_POST['idtache'])AND isset($_POST['idetape']))
   {
    
     $idtache=htmlspecialchars($_POST['idtache']);
     $idetape=htmlspecialchars($_POST['idetape']);
         supprimer_tache($idtache, $idetape);

        header('location: ');
  }
   	
  	// DELETE a project and its steps and tasks
 //////////////////////////////////////////////////////////////////////

if(isset($_POST['idprojetsup']))
{
      
    $idprojetsup=htmlspecialchars($_POST['idprojetsup']);
      var_dump($idprojetsup);
     supprimer_projet($idprojetsup);
    header('location: index.php');
}

   	
include_once '../vue/detailproject_vue.php';
include_once '../vue/template/footer.php';
 