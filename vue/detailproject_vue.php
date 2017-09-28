

<header  class="mb-5">
            <h1 class="text-center  titre mt-5">Details</h1>
         
</header>
            <!-- DISPLAY STEPS OF PROJECT -->
<div class="container">
 <div class="row">

 <?php 
   while($steps=$req->fetch())  
   {
   	$id=$steps['id'];
   ?>       

     
    <p class="col-12 col-md-6 col-lg-4" >
	  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $id; ?>" aria-expanded="false" aria-controls="<?php echo $id;?>">
	     <?php   echo $steps['nometape'];?>
	  </button>
     </p>
     <div class="collapse" id="<?php echo $id; ?>">
         <div class="card card-block">
           tache
        </div>
    </div>  
     
  <?php

}
  ?>
  </div>
</div>  


