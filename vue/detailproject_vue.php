

<header  class="mb-5">
            <h1 class="text-center  titre mt-5"><?php echo $nom_project?></h1>
</header>
            <!-- DISPLAY STEPS OF PROJECT -->
<div class="container w-50">
 
 <div id="accordion" role="tablist" aria-multiselectable="true">
 <?php 
    foreach($steps as $step)
  

   {
   	 
   	$id=$step['id'];
   	

   ?>       
       
  		<div class="card mb-2">
		    <div class="card-header" role="tab" id="headingOne">
			      <h5 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $id; ?>" aria-expanded="true" data-target="#<?php echo $id; ?>" aria-controls="<?php echo $id; ?>">
			         
			              <?php   echo $step['nometape'];
			                      echo $step['id']   ?>
			        </a>
			        
			             <!-- button for add spots -->
                        
     
            <button type="button" class="btn ajouter-tache" data-toggle="modal" data-target="#modal<?php echo $step['id'] ;?>" data-whatever=""><i class="fa fa-plus  ml-5" aria-hidden="true"></i>
			</button>
    
                     		<!-- Add steps modal -->
                     <!--//////// ///////////////////////// -->

				<div class="modal fade" id="modal<?php echo $step['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="modal<?php echo $step['id'] ;?>">ajouter taches</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="add_project.php" method="post">

			          <div class="form-group">
			            <label for="nomtache" class="form-control-label">Nom tache:</label>
			            <input type="text"  name ="nomtache" class="form-control" id="recipient1-name">
			          </div>
                         
			            <input type="hidden"  name ="idetape" value="<?php echo $step['id']; ?>" class="form-control" id="recipient3-name">
			            <input type="hidden"  name ="idprojet"  value="<?php echo $step['idprojet']; ?>" class="form-control" id="recipient2-name">
			              <button  type="submit" class="btn">Ajouter</button>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        
			      </div>
			    </div>
			  </div>
			</div>
              <!--  end of modal furm to add spots  -->





			             <!-- ///////////////////////////////////////////
			    -->
			        <i class="fa fa-trash supprimer" aria-hidden="true" onclick="supprimer();"></i>

			      </h5>
		 	</div>


         <!-- display spots  in the  steps -->

     <!-- //////////////////////////////////////////////////////// -->
		<div id="<?php echo $id; ?>" class="collapse" role="tabpanel" aria-labelledby="<?php echo $id; ?>">
		      <div class="card-block">
                  <!-- send id of steps -->
          <!-- <form action="../controleur/detail_project.php" method="post" >
             <input type="hidden" value="<?php  $id; ?>" name="idetape">
          </form>
 		-->

           <ul class="list-group">
           <?php 
		         	
		   			foreach($req2 as $tache ){ 
		   				if($tache['idetape']===$step['id']){
		   					
		   				
		   				
		   				
		             ?>
		            <li class="list-group-item list-group-item-success">
						<?php echo $tache["nomtache"]; ?>
                      <i class="fa fa-trash supprimer-tache" aria-hidden="true" onclick="supprimer();"></i>
		            </li>
           </ul>
			<?php 
		}
		   		} ?>
      </div>
    </div>
  </div>
<?php } ?>
  </div>
</div> 
 <!-- end container -->