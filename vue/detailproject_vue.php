

<header  class="mb-5">
            <h1 class="text-center  titre mt-5"><?php echo $nom_project?></h1>
         
</header>
            <!-- DISPLAY STEPS OF PROJECT -->
<div class="container w-50">
 
 <div id="accordion" role="tablist" aria-multiselectable="true">
 <?php 
   while($steps=$req->fetch())  
   {
   	$id=$steps['id'];
   	

   ?>       
       
  <div class="card mb-5">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $id; ?>" aria-expanded="true" data-target="#<?php echo $id; ?>" aria-controls="<?php echo $id; ?>">
              <?php   echo $steps['nometape'];?>
        </a>
        <i class="fa fa-trash supprimer" aria-hidden="true"></i>

      </h5>
    </div>

    <div id="<?php echo $id; ?>" class="collapse" role="tabpanel" aria-labelledby="<?php echo $id; ?>">
      <div class="card-block">
         taches
      </div>
    </div>
  </div>
 <?php 
}
 ?>
  </div>
</div>  








     
    
  


