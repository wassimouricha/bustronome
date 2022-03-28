<?php


//je vais faire une condition pour permettre de voir si l'utilisateur est authentifier 
if(!isset($_SESSION['auth'])){
    header('Location: login.php');
}