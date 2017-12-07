<?php
   include_once 'dbconnexion/db_connexion.php';


				//FUNCTION FOR  DISPLY FROM DATA BASE
  //--------------------------------------------------------------------

   function affiche_project()
   {
      $bdd=connex_bdd();
      $req=$bdd->query('SELECT * FROM projets');
      
   
      return $req;
   }

   function affich_etape($id)
   {
     
       $bdd=connex_bdd();
       $req1=$bdd->prepare('SELECT * FROM etapes_projet WHERE idprojet=?');
       $req1->execute(array($id));
       $req1=$req1->fetchAll();
      
       return $req1;

   }


   function affiche_tache()
   {
   	     $bdd= connex_bdd();
   	       
   	     
   	     $req2=$bdd->query('SELECT  * FROM taches ');
   	     $req2 = $req2->fetchAll();
   	   
         return $req2;
   }



  					//FUNCTION FOR ADD IN DATA BASE
  //--------------------------------------------------------------------


   function add_projet($nom, $client, $date_debut, $date_fin)
   {
   	 $bdd=connex_bdd();

   	 $req3=$bdd->prepare('INSERT INTO projets(nom, nomclient, date_debut, date_rendu) VALUES (:nom, :client, :date_debut, :date_fin) ');
   	 $req3->execute(array(
   	 	 'nom'=>$nom,
   	 	 'client'=>$client,
   	 	 'date_debut'=>$date_debut,
   	 	 'date_fin'=>$date_fin
   	 	));

    }

   function add_etape($nometape, $idprojet)
   {
      $bdd=connex_bdd();

   	 $req4=$bdd->prepare('INSERT INTO etapes_projet(nometape, idprojet) VALUES (:nometape, :idprojet) ');
   	 $req4->execute(array(
   	 	 'nometape'=>$nometape,
   	 	 'idprojet'=>$idprojet
   	 	 
   	 	));

   }

   function add_tache($nomtache, $idetape, $idprojet)
   {

      $bdd=connex_bdd();
       
        $req5 = $bdd->prepare('INSERT INTO taches( nomtache, idetape, idprojet) VALUES(:nomtache, :idetape, :idprojet)');

			$req5->execute(array(

			    'nomtache' => $nomtache,

			    'idetape' => $idetape,

			    'idprojet' => $idprojet

			    
			    ));

}			
		//FUNCTION DELETE FROM DATA BASE
  //--------------------------------------------------------------------
             //delete steps from table 
   function supprimer_etape($idetapesup,$idproject_etape)
   {
       $bdd=connex_bdd();
       
       $req8= $bdd->prepare('DELETE  FROM taches WHERE idetape=? AND idprojet=?');

     $req8->execute(array($idetapesup, $idproject_etape));
				
       $req6 = $bdd->prepare('DELETE  FROM etapes_projet WHERE id=? AND idprojet=?');

	  $req6->execute(array($idetapesup, $idproject_etape));
		


   }



       // delete spots from table
  function supprimer_tache($idtache,$idetape)
  {
   
      $bdd=connex_bdd();
       

       $req = $bdd->prepare('DELETE  FROM taches WHERE id=? AND idetape=?');

			$req->execute(array(

			     $idtache, $idetape));


  }

     // delete project and its steps and spots
function  supprimer_projet($idprojetsup)
{
     
    $bdd=connex_bdd();
    $req3 = $bdd->prepare('DELETE  FROM taches WHERE  idprojet=?');

			$req3->execute(array(

			     $idprojetsup));
	$req2 = $bdd->prepare('DELETE  FROM etapes_projet WHERE idprojet=?');

	  $req2->execute(array($idprojetsup));
    $req = $bdd->prepare('DELETE  FROM projets WHERE id=? ');

			$req->execute(array(

			     $idprojetsup));
     

	  





}

?>