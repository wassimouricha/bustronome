<?php

//ici on va avec ces requetes prendre les données pour un auteur et les publié dans mes allprofile.php

require('actions/database.php');

$getAllTheProfile = $bdd->query('SELECT id, pseudo, nom, prenom, binu FROM users  ORDER BY id DESC');