

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
       
  <div class="card mb-2">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $id; ?>" aria-expanded="true" data-target="#<?php echo $id; ?>" aria-controls="<?php echo $id; ?>">
         <form action="../controleur/detail_project.php" method="post" accept-charset="utf-8">
         	<input type="hidden" name="id_etape" value="<?php echo $id; ?>">

         </form>
              <?php   echo $steps['nometape'];?>
        </a>
        <i class="fa fa-trash supprimer" aria-hidden="true" onclick="supprimer();"></i>

      </h5>
    </div>

    <div id="<?php echo $id; ?>" class="collapse" role="tabpanel" aria-labelledby="<?php echo $id; ?>">
      <div class="card-block">
             <ul class="list-group">
		         <?php 
		   			while(($taches=$req2->fetch() )and ($taches['idprojet']==$id) )
		   			{
		   				
		          ?>
		              
		            <li class="list-group-item list-group-item-success">
		            	 <?php   echo $taches['nomtache'];?>
                    
                      <i class="fa fa-trash supprimer-tache" aria-hidden="true" onclick="supprimer();"></i>
		            </li>
                    
		         


		          <?php
		              }
		            ?>
           </ul>
      </div>
    </div>
  </div>
 <?php 
}
 ?>
  </div>
</div>  








     
    
  


