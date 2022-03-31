<?php session_start(); 
require('actions/showalluserprofilaction.php');
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
                 <li> <a href="index.php"> <i class="fa-solid fa-calendar"> <span> Accueil </span>  </i></a>  </li>
                </ul>
                <div class="titrecalend">
                  <h1 >
                    Voici les Profils
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus">
                 
                  <?php 
                        while($ausers = $getAllTheProfile->fetch()){
                            ?>
                             <div class="cardass">
                             <?= '<img class="cardus_image" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $ausers['binu'] ) . '" />'; ?>
                          <div class="cardus_content">
                            <p> <?php echo $ausers['pseudo'];  ?>  </p>
                            <p> <?php echo $ausers['nom'];  ?></p>
                            <p> <?php echo $ausers['prenom'];  ?></p>
                          </div>
                        
                  </div>
                             <?php 
                        }
                  
                  ?>

                      
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