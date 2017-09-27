<?php
include_once 'template/header.php';
?>

<div class="container w-50 mt-5 pt-5">
<h1 class="titre  mb-5 mx-auto"> Ajout d'un projet:</h1>
<form action="../controleur/add_project.php" methode="post">
<div class="form-group row">
  <label for="nom" class="col-2 col-form-label">Nom:</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nom" id="example-text-input">
  </div>
</div>


<div class="form-group row">
  <label for="client" class="col-2 col-form-label">client</label>
  <div class="col-10">
    <input class="form-control" type="number" name="client" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="datedebut" class="col-2 col-form-label">Date debut</label>
  <div class="col-10">
    <input class="form-control" type="date"  name="datedebut" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="daterendu" class="col-2 col-form-label">Date rendu</label>
  <div class="col-10">
    <input class="form-control" type="date"  name="daterendu" id="example-date-input">
  </div>
</div>

</form>
</div>



