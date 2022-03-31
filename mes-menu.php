<?php 
require('actions/securiteaction.php');
require('actions/mesmenusaction.php');

   
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
                    Voici mes Menus
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus">
                  <div class="cardass">
                      <img src="./assets/coquille.jpg" alt="" class="cardus_image">
                          <div class="cardus_content">
                            <p> Coquille saint jacques miam</p>
                            <p> Doubles dose de  miam</p>
                          </div>
                          <div class="card_info">
                            <div>
                               <box-icon type='solid' name='like'></box-icon> 310
                            </div>
                            <div>
                              <a href="./" class="cardus_link"> Miam</a>
                            </div>
                          </div>
                  </div>
               
                  <?php 
                        while($menus = $getAllTheMenu->fetch()){
                            ?>
                             <div class="cardass">
                      <?= '<img class="cardus_image" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $menus['bin'] ) . '" />'; ?>
                          <div class="cardus_content">
                            <p> <?php echo $menus['titre'];  ?>  </p>
                            <p> <?php echo $menus['descriptioned'];  ?></p>
                            <p> <?php echo $menus['content'];  ?></p>
                          </div>
                          <div class="card_info">
                            <div>
                               <box-icon type='solid' name='like'></box-icon> 310
                            </div>
                            <div>
                              <a href="modifier-menu.php?id=<?php echo $menus['id']; ?>" class="cardus_link"> Modifier</a>
                              <a href="actions/supprimermenuaction.php?id=<?php echo $menus['id']; ?>" class="cardus_link"> Supprimer</a>
                            </div>
                          </div>
                  </div>
                             <?php 
                        }
                  
                  ?>

                      

                </div>

                <br>
                <div class="butonneded" >

<a href="./ajoutdemenu.php" class="btn btn-dark" >Ajouter un menu</a>

</div>
                                        
               


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