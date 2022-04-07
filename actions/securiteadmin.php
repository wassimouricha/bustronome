<?php


//je vais faire une condition pour permettre de voir si l'admin est authentifier 
session_start();
if(!isset($_SESSION['mdp'])){
    header('Location: loginadmin.php');
}