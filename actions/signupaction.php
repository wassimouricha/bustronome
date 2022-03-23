<!-- MVC : 

M : le model c'est ce qui va se charger de récuperer des données  et de faire des requetes 
V : View (vue) sera tout ce qui est affiché à l'utilisateur 
C :   le controlleur , il va controller toute les données , le controlleur va aller appeller le model , récuperer les données puis les afficher 

-->


<!-- ici le code on va l'inclure dans page_de_connexion -->
<?php

require ('actions/database.php') ;

// je vais vérifier si l'utilisateur clique bien sur le bouton
if(isset($_POST['validate'])){
//  ici on va verifier si toutes les champs ne sont pas vides
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password']) ){
            //ici on déclare nos varibales qui vont contenir nos champs 
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);  //j'indique avec password hash que je vais crypter le mot de passe, 
        //il prend deux parametres le champs de base de donnée password et ensuite le type de cryptage

        $checkIfUserAlreadyExists = $bdd ->prepare('SELECT pseudo FROM users WHERE pseudo = ?');  // je ais une requete sql pour récuperer les données qui se trouve dans la table
        // je déclare donc ici que je veux récuperer toutes les données (avec l'étoile *) ou le pseudo dans la base de données users qui possède déjà le pseudo en questions 
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            //code... et message d erreur
        }else{
            $errorMsg = " Veuillez compléter tous les champs....";
        }

    }else{
        $errorMsg = " Veuillez compléter tous les champs....";
    }

};