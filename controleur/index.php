

<?php



include_once '../vue/template/header.php';
 include_once '../modele/get_project.php';
  $req=affiche_project();

include_once '../vue/index_vue.php';
include_once '../vue/template/footer.php';