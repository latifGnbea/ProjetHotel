<?php
include_once('models/autresFonctions.php');
include_once('models/profileBd.php');
//declaration de la variable 
$id = secureGetPost($_GET['id']);
//verification du profile avec son id 
$existenceProfile = selectAllUsersById($id);
if (!isset($existenceProfile) || isset($existenceProfile) && empty($existenceProfile)) {
    die('Desolé element selectionnée inexistent');
}
//recuperation des donnees depuis la bd
foreach ($existenceProfile as $profile) {
    $id = $profile->id_pp;
    $titre = $profile->titre_pp;
}