
        
        <header  class="mb-5">
            <h1 class="text-center  titre mt-5">PROJETS</h1>
         
        </header>

        <div class="d-flex flex-row-reverse mr-5 mb-5">
              <a href="../controleur/add_project.php"  role="button" class="p-2 btn btn-outline-warning ">AJouter un  projet</a>

        </div>


        <div class="container">
         <div class="row justify-content-around">
         <?php
           while($project=$req->fetch())
           {

            ?>
           <div class="card project col-12  mb-5 col-md-6 col-lg-3">
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
        