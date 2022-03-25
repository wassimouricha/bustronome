

<!DOCTYPE html>
<html lang="en">

<!-- En tete -->
<?php include 'includes/head.php' ; ?>

<?php require('actions/loginaction.php'); ?>

<!-- Body -->
<body class="main">


            <!-- sidebar -->
            <?php include 'includes/sidebar.php' ; ?>
            <!-- formulaire -->
            <div class="containere">
        
            <?php 

    if(isset($errorMsg)){echo '<p class="messagus">'.$errorMsg.'</p>'; }  ?>
        <br> <br>
    <form class="container" method="POST"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
            <div id="emailHelp" class="form-text">Mettez votre pseudo</div>
        </div>
    

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-dark" name="validate">Se connecter</button>
        <br> <br>
        <a href="page_de_connexion.php"><p >pas de compte ? Inscrivez-vous !</p></a>
    </form>






      
          
   
            
        </div>

            <!-- footer -->
            <?php include 'includes/footer.php' ; ?>

    <!-- Script -->
      <script src="./script.js"></script>
</body>
</html>