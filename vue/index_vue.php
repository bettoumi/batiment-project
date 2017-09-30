
        
        <header  class="mb-5">
            <h1 class="text-center  titre mt-5">PROJETS</h1>
         
        </header>

        <div class="d-flex flex-row-reverse mr-5 mb-5">
             
              <!-- Add project button  -->
              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter un projet</button>

                       <!-- Add project modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouveau projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  method ="post" action="add_project.php">
                  <div class="form-group">
                    <label for="nom" class="form-control-label">Nom_projet:</label>
                    <input type="text" name="nom" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="client" class="form-control-label">Nom client:</label>
                    <input class="form-control"  type="text" name="client" id="message-text">
                  </div>
                  <div class="form-group">
                    <label for="date_debut" class="form-control-label">Date_debut:</label>
                    <input  type="date" class="form-control"  name="date_debut" id="message-text">
                  </div>
                  <div class="form-group">
                    <label for="date_rendu" class="form-control-label">Date_rendu:</label>
                    <input class="form-control"  name="date_rendu" id="message-text">
                  </div>
                     <button  type="submit"   class="btn">Ajouter</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>





        </div>


        <div class="container">
         <div class="row justify-content-around">
         <?php
           while($project=$req->fetch())
           {

            ?>
           <div class="card project col-12 mr-2 mb-3 col-md-6 col-lg-3">
              <div class="card-block">
               
                <p class="card-text titre-projet"><?php echo $project['nom']?></p>
                <a href="#"><i class="fa fa-trash-o mr-5"></i>
                </a>
                <a href="../controleur/detail_project.php?id=<?php echo $project['id'] ;?>&amp; titre=<?php echo $project['nom'] ;?>" class="btn ml-5">details</a>
              </div>
          </div>
          <?php
          }
          ?>
         </div>
        </div>
        