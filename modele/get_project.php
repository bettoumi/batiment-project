<?php
   include_once 'dbconnexion/db_connexion.php';
   function affiche_project()
   {
      $bdd=connex_bdd();
      $req=$bdd->query('SELECT * FROM projets');
      
      
      return $req;
   }
   function add_projet($nom, $client,$date_debut, $date_fin)
   {
   	 $bdd=connex_bdd();
   	 $req=$bdd->prepare('INSERT INTO projets(nom,client,date_debut,date_fin) VALUES (:nom, :client, :date_debut, :date_fin) ');
   	 $req->execute(array(
   	 	 'nom'=>$nom,
   	 	 'client'=>$client,
   	 	 'date_debut'=>$date_debut,
   	 	 'date_fin'=>$date_fin


   	 	));


   }
   function affich_detail($id)
   {
     
       $bdd=connex_bdd();
       $req=$bdd->prepare('SELECT * FROM etapes_projet WHERE idprojet=?');
       $req->execute(array($id));
       return $req;

   }
   function affiche_tache()
   {
   	     $bdd= connex_bdd();
   	     $req=$bdd->query('SELECT * FROM taches ');
         
         return $req;
   }

?>