<!-- MVC : 

M : le model c'est ce qui va se charger de récuperer des données  et de faire des requetes 
V : View (vue) sera tout ce qui est affiché à l'utilisateur 
C :   le controlleur , il va controller toute les données , le controlleur va aller appeller le model , récuperer les données puis les afficher 

-->


<!-- ici le code on va l'inclure dans page_de_connexion -->
<?php
session_start();
require ('actions/database.php'); //quand il inclut la databse il inclut également la sessionstart

// je vais vérifier si l'utilisateur clique bien sur le bouton
//validation du formulaire
if(isset($_POST['validate'])){
//  ici on va verifier si toutes les champs ne sont pas vides

        //verifier si l'user à bien completer tout les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password']) ){
            //ici on déclare nos varibales qui vont contenir nos champs 
            //les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_pic = file_get_contents($_FILES['binu']['tmp_name']); 
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);  //j'indique avec password hash que je vais crypter le mot de passe, 
        //il prend deux parametres le champs de base de donnée password et ensuite le type de cryptage

            //verifier si l'utilisateur existe déjà
        $checkIfUserAlreadyExists = $bdd ->prepare('SELECT pseudo FROM users WHERE pseudo = ?');  // je ais une requete sql pour récuperer les données qui se trouve dans la table
        // je déclare donc ici que je veux récuperer toutes les données (avec l'étoile *) ou le pseudo dans la base de données users qui possède déjà le pseudo en questions 
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            //inserer l'utilisateur dans le bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, mdp, binu) VALUES(?, ?, ?, ?, ?)');  //avec les ? on indique combien de champs on veut récuperer
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password, $user_pic));  //on execute le requete en indiquant quelle variable il faut récuperer

                //recuperer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prenom, binu FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?  AND binu = ?');
            $getInfosOfThisUserReq->execute(array( $user_lastname, $user_firstname, $user_pseudo,  $user_pic));

            $usersInfos = $getInfosOfThisUserReq->fetch(); //on indique que l'on met toutes les données dans un tableau avec fetch

            //authentification de  l'utilisateur sur le site et recuperer ses donénes dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] =  $usersInfos['id'];
            $_SESSION['lastname'] =  $usersInfos['nom'];
            $_SESSION['firstname'] =  $usersInfos['prenom'];
            $_SESSION['pseudo'] =  $usersInfos['pseudo'];
            $_SESSION['binu'] =  $usersInfos['binu'];

                //je redirige apres la connexion vers index.php
            header('Location: index.php');

        }else{
            $errorMsg = " L'utilisateur existe déjà sur le site !";
        }

    }else{
        $errorMsg = " Veuillez compléter tous les champs....";
    }

};