<?php

//ici on va avec ces requetes prendre les données pour un auteur et les publié dans mes menu.php

require('actions/database.php');

$getAllTheMenu = $bdd->prepare('SELECT id, titre, descriptioned, content, bin FROM menu WHERE id_auteur = ? ORDER BY id DESC');
$getAllTheMenu->execute(array($_SESSION['id']));
