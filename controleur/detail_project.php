<?php include_once '../vue/template/header.php';
 $id_project=htmlspecialchars($_GET['id']);

  include_once '../modele/get_project.php';
  $req=affich_detail($id_project);

   include_once '../vue/detailproject_vue.php';
   include_once '../vue/template/footer.php';