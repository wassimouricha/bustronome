<?php
session_start();
require('actions/database.php');

if(isset($_POST['validate'])){
    //  ici on va verifier si toutes les champs ne sont pas vides
    
            //verifier si l'user à bien completer tout les champs
        if(!empty($_POST['pseudo']) AND !empty($_POST['password']) ){
                //ici on déclare nos varibales qui vont contenir nos champs 
                //les données de l'user
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_password = htmlspecialchars($_POST['password']);  //pas de cryptage

            //on verifie si l'utilisateur existe
            $checkIfUserExist = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');  //select , requete sql pour selectionner des données de la table 
            //* signifie toute les données
            //cette requete recupere les données d'utilisateurs qui possède le meme pseudo 
            $checkIfUserExist->execute(array($user_pseudo));
               
            //récuperer les données de l'utilisateur
            if($checkIfUserExist->rowCount() > 0){
                //on va également verifier le mot de passe
                $usersInfos =  $checkIfUserExist->fetch();  //qui va nous permettre de recuperer toutes les donénes sous forme d'un tableau et on les stock dans la variable
                    if(password_verify($user_password, $usersInfos['mdp'])){
                        $_SESSION['auth'] = true;
                        $_SESSION['id'] =  $usersInfos['id'];
                        $_SESSION['lastname'] =  $usersInfos['nom'];
                        $_SESSION['firstname'] =  $usersInfos['prenom'];
                        $_SESSION['pseudo'] =  $usersInfos['pseudo'];

                        //redirige l'utilisateur vers la paghe d'accueil
                        header('Location: index.php');

                    } else{
                        $errorMsg = "Votre mot de passe est incrorrect";
                    }
            }else{
                $errorMsg = "Votre pseudo est incrorrect";
            };
          
    
        }else{
            $errorMsg = " Veuillez compléter tous les champs....";
        }
    
    }