<?php

//ici on va avec ces requetes prendre les données pour un auteur et les publié dans  menu.php

require('actions/database.php');

$getAllTheMenu = $bdd->query('SELECT id, titre, descriptioned, content, bin FROM menu  ORDER BY id DESC');

