<
            <button type="button" class="btn ajouter-tache" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus  ml-5" aria-hidden="true"></i>
			</button>
     		<!-- Add steps modal -->

                     <!--//////// ///////////////////////// -->

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">ajouter taches</h5>
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
                         
			            <input type="hidden"  name ="idetape"  value="<?php echo $steps['id'];?>" class="form-control" id="recipient2-name">
			            <input type="hidden"  name ="idprojet"  value="<?php echo $steps['idprojet']; ?>" class="form-control" id="recipient2-name">
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


			