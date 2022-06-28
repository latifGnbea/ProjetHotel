<?php
include_once('models/autresFonctions.php');
include_once('models/profileBd.php');
//declaration de la variabfa-pull-left
$id = secureGetPost($_GET['id']);
//verification du profile avec son id 
$existenceProfile = selectAllUsersById($id);
if (!isset($existenceProfile) || isset($existenceProfile) && empty($existenceProfile)) {
    die('Desolé element selectionnée inexistent');
}
//suppression du profile
$suppression = supprimerUsers($id);
if (!isset($suppression)) {
    die('Echec de la suppression');
}

header('location:index.php?section=Profile');