<?php

require('actions/database.php');
// if isset permet de demander si la variable est déclaré, la methode $_GET sert a récuperer les données de l'url
if(isset($_GET['id'])  AND !empty($_GET['id'])){



}else{
    $errorMsg = "Aucun menu n'a été trouvé !" ;
}