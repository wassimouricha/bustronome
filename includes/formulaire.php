<div class="containere">
        
           <?php

        <form class="container" method="POST"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
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
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                </div>
        
                <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        </form>
    

        </form>
          
   
</div>
