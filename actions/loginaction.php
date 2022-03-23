<?php

require('actions/database.php');

if(isset($_POST['validate'])){
    //  ici on va verifier si toutes les champs ne sont pas vides
    
            //verifier si l'user à bien completer tout les champs
        if(!empty($_POST['pseudo']) AND !empty($_POST['password']) ){
                //ici on déclare nos varibales qui vont contenir nos champs 
                //les données de l'user
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_password = htmlspecialchars($_POST['password']);  //pas de cryptage
            
            $checkIfUserExist = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');  //select , requete sql pour selectionner des données de la table 
            //* signifie toute les données
            //cette requete recupere les données d'utilisateurs qui possède le meme pseudo 
            $checkIfUserExist->execute(array($user_pseudo));
               
            if($checkIfUserExist->rowCount() > 0){
                //

            }else{
                $errorMsg = "Votre pseudo est incrorrect";
            };
          
    
        }else{
            $errorMsg = " Veuillez compléter tous les champs....";
        }
    
    }