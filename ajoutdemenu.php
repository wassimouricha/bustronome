

<?php 

require('actions/publishquestionaction.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<!-- En tete -->

<?php include 'includes/head.php' ; ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<!-- Body -->
<body class="main">


            <!-- sidebar -->
            <?php include 'includes/sidebar.php' ; ?>
           
            <div class="containered">
                <ul class="listemenud">
                 <li> <a href="reservation.php"> <i class="fa-solid fa-calendar"> <span> Date & Heure </span>  </i></a>  </li>
                 <li> <a href="menu.php"> <i class="fa-solid fa-calendar"> <span> Menu </span>  </i></a>  </li>
                 <li> <i class="fa-solid fa-calendar"> <span> Option </span>  </i> </li>
                </ul>
                <div class="titrecalend">
                  <h1 >
                    Ajouter un Menu
                  </h1>
                  
                </div>
             
                   <!-- Test de publication -->
                  
                            <!-- code pour afficher les messages d'erreur ou de succès dans le -->
                      <?php 

                      if(isset($errorMsg)){
                          echo '<p class="messagus">'.$errorMsg.'</p>'; 
                          } 
                            elseif(isset($successMsg)){
                                echo '<p class="messagus">'.$successMsg.'</p>'; 
                            }
                          ?>
                         <br> <br>
                  <form class="container" method="POST" enctype="multipart/form-data"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Titre du menu</label>
                              <input type="text" class="form-control" name="title">

                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Description du menu </label>
                              <textarea  class="form-control" name="descriptioned"> </textarea>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Contenu du menu</label>
                              <textarea  class="form-control" name="content"></textarea>
                          </div>
                          <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Choisissez votre photo</label>
                          <br>
                            <input type="file"  name="bin" id="upload">
                          </div>

                  
                          <button type="submit" class="btn btn-dark" name="validate">Publier</button>
                     
                  </form>
              

    
       



              </div>
         

            
            <!-- footer -->
            <?php include 'includes/footer.php' ; ?>

    <!-- Script -->
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( "#datepicker" ).datepicker();
      </script>
      <script src="./script.js"></script>
</body>
</html>