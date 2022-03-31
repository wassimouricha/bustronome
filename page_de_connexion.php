<?php require('actions/signupaction.php');  ?>

<!DOCTYPE html>
<html lang="en">

<!-- En tete -->
<?php include 'includes/head.php' ; ?>

<!-- Body -->
<body class="main">


            <!-- sidebar -->
            <?php include 'includes/sidebar.php' ; ?>
            <!-- formulaire -->
            <div class="containere">
        
           <?php 

            if(isset($errorMsg)){echo '<p class="messagus">'.$errorMsg.'</p>'; }  ?>
  <br> <br>
        <form class="container" method="POST"  enctype="multipart/form-data"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo">
                    <div id="emailHelp" class="form-text">Je ne vais jamais partager vos informations vous pensez bien</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="firstname">
                </div>
                <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Choisissez votre photo</label>
                          <br>
                            <input type="file"  name="binu" id="upload">
                          </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                </div>
        
                <button type="submit" class="btn btn-dark" name="validate">S'inscrire</button>
                <br> <br>
                <a href="login.php" ><p>déjà un compte ? connectez-vous</p></a>
        </form>
    

       
          
   
</div>

            <!-- footer -->
            <?php include 'includes/footer.php' ; ?>

    <!-- Script -->
      <script src="./script.js"></script>
</body>
</html>