<?php 
session_start();
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
                 <li> <a href="profile.php"> <i class="fa-solid fa-calendar"> <span> Mon Profil </span>  </i></a>  </li>
               
                </ul>
              
                <div class="titrecalend">
                  <h1 >
                    Voici Mon Profil
                  </h1>
               
                </div>

                <?php 
            if(isset($errorMsg)){echo '<p class="messagus">'.$errorMsg.'</p>'; } 
            
            if(isset($$getAllTheProfile)){
                ?>

                <div class="cardus">
                    <div class="cardass">
                    <?= '<img class="cardus_image" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode($userinfo['binu']) . '" />'; ?>
                    <div class="cardus_content">
                        <h4 >Pseudo : <?= $userpseudo; ?></h4>
                        <p >Nom : <?= $usernom; ?>  <br>Prénom : <?= $userprenom; ?> </p>
                        </div>
                    </div>

                    
                </div>
                <?php

            }
            
            ?>

              

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