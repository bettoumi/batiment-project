<?php
include_once '/template/header.php';
?>
<form action="../controleur/add_project.php" methode="post">
<div class="form-group row">
  <label for="nom" class="col-2 col-form-label">Nom:</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nom" id="example-text-input">
  </div>
</div>


<div class="form-group row">
  <label for="idclient" class="col-2 col-form-label">id_client</label>
  <div class="col-10">
    <input class="form-control" type="number" name="idclient" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="datedebut" class="col-2 col-form-label">Date debut</label>
  <div class="col-10">
    <input class="form-control" type="date"  name="datedebut" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="daterendu" class="col-2 col-form-label">Daterendu</label>
  <div class="col-10">
    <input class="form-control" type="date"  name="daterendu" id="example-date-input">
  </div>
</div>

</form>



