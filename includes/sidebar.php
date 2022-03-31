<div class="sidebar">
        
        <a href="index.php"><img src="./assets/logo2.png" alt="logo bustronome" class="imagelogo" ></a>
        <div class="logo_container">
     
        </div>
        <ul class="nav">
            <li class="solou" id="golden">
            <a href="reservation.php" class="binks" id="blackus" >
                <span class="list_name"><i class='bx bx-star'></i> Réservez Maintenant <i class='bx bx-star'></i></span>
            </a>
        </li>
        <?php 
        if(!isset($_SESSION['auth'])){
          ?>
        <li class="solou">
        <a href="login.php"  class="binks">
            <span class="list_name" ><i class='bx bx-star'></i> Connexion <i class='bx bx-star'></i></span>
        </a>
    
        </li>
        <?php
        } 
          ?>
          <?php 
        if(isset($_SESSION['auth'])){
          ?>

        <li class="solou">
        <a href=" actions/logaoutaction.php"  class="binks">
            <span class="list_name" > Deconnexion </span>
        </a>
    
        </li>

        <li class="solou">
        <a href=" mes-menu.php"  class="binks">
            <span class="list_name" > Mes menus </span>
        </a>
    
        </li>

        <li class="solou">
        <a href=" profile.php?id=<?= $_SESSION['id']; ?>"  class="binks">
            <span class="list_name" > Mon Profil </span>
        </a>
    
        </li>

        <?php
        } 
          ?>
            </li>
            <li class="solou">
            <a href="# " class="binks">
                <span class="list_name"> Carte Cadeau </span>
            </a>
        
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Les offres </span>
            </a>
     
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Le concept </span>
            </a>
          
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Privatisation </span>
            </a>
           
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Actualités du bus </span>
            </a>
         
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Le blog </span>
            </a>
          
            </li>
            <li class="solou">
            <a href="allprofile.php" class="binks">
                <span class="list_name"> Les profils </span>
            </a>
          
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Photos et videos </span>
            </a>
      
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Questions fréquentes </span>
            </a>
      
            </li>
            <li class="solou" >
            <a href="#" class="binks">
                <span class="list_name"> Contactez le Bustronome Paris </span>
            </a>
           
            </li>
         
         

        </ul>
      
        <div class="footer_side" >
            <div class="iconus">
                <i class='bx bxs-map'></i>
            </div>
            <ul class="titrou">
                <li>
                    <span>ARC DE TRIOMPHE</span>     
                </li>
                <li>
                    <a href="https://www.google.com/maps/place/Bustronome+-+Paris.+Restaurant-bus/@48.872752,2.294031,15z/data=!4m5!3m4!1s0x0:0x2b80095c2d0654ca!8m2!3d48.872752!4d2.294031" target="_blank" class="angle">angle avenue kleber</a>

                </li>
                
            </ul>
            <ul>
            
            </ul>
            </div>
            
       

    </div>