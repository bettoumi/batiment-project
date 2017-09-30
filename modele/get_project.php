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
       $req=$bdd->prepare('SELECT * FROM etapes_projet WHERE idprojet=?');
       $req->execute(array($id));
       $req=$req->fetchAll();
       return $req;

   }


   function affiche_tache()
   {
   	     $bdd= connex_bdd();
   	       
   	     
   	     $req=$bdd->query('SELECT  * FROM taches ');
   	     $req = $req->fetchAll();	
         return $req;
   }



  					//FUNCTION FOR ADD IN DATA BASE
  //--------------------------------------------------------------------


   function add_projet($nom, $client, $date_debut, $date_fin)
   {
   	 $bdd=connex_bdd();

   	 $req=$bdd->prepare('INSERT INTO projets(nom, nomclient, date_debut, date_rendu) VALUES (:nom, :client, :date_debut, :date_fin) ');
   	 $req->execute(array(
   	 	 'nom'=>$nom,
   	 	 'client'=>$client,
   	 	 'date_debut'=>$date_debut,
   	 	 'date_fin'=>$date_fin
   	 	));

    }

   function add_etape($nometape, $idprojet)
   {
      $bdd=connex_bdd();

   	 $req=$bdd->prepare('INSERT INTO etapes_projet(nometape, idprojet) VALUES (:nometape, :idprojet) ');
   	 $req->execute(array(
   	 	 'nometape'=>$nometape,
   	 	 'idprojet'=>$idprojet
   	 	 
   	 	));

   }

   function add_tache($nomtache, $idetape, $idprojet)
   {
      $bdd=connex_bdd();
       var_dump($nomtache); 
       var_dump($idetape);
       
        var_dump($idprojet);
        
   	 $req=$bdd->prepare('INSERT INTO taches(idprojet, nomtache, idetape) VALUES (:idprojet, :nomtache, :idetape) ');
   	 $req->execute(array(
   	 	 	 'idprojet'=>$idprojet,
   	 	 	  'nomtache'=>$nomtache,
   	 	 	  'idetape'=>$idetape
   	 	 
   	 	));

   }




   

?>