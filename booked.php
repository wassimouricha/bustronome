<?php 

require('actions/securiteadmin.php');
require('actions/showallbooked.php');

   
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
                    Voici toutes les réservations
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus">
                 
               
                  <?php 
                        while($booked = $getAllTheBooked->fetch()){
                            ?>
                             <div class="cardass">
                     
                          <div class="cardus_content">
                            <p> Date :  <?php echo $booked['date'];  ?>  </p>
                            <p> Heure :  <?php echo $booked['heure'];  ?></p>
                            <p> Nom : <?php echo $booked['nom'];  ?></p>
                            <p> E-mail : <?php echo $booked['email'];  ?></p>
                          </div>
                          <div class="card_info">
                        
                          
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