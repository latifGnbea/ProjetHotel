<?php
include_once('models/autresFonctions.php');
include_once('models/profileBd.php');
//declaration de la variable 
$id = secureGetPost($_POST['id']);
$profile = secureGetPost($_POST['profile']);
//traitements de donnes
    //profile
if (!formatValideNom($profile)) {
    die('Le format de votre profile incorrecte');
}
//verification du profile avec son id 
$existenceProfile = selectAllUsersById($id);
if (!isset($existenceProfile) || isset($existenceProfile) && empty($existenceProfile)) {
    die('Desolé element selectionnée inexistent');
}
//modification 
$update = modifierUsers($id,$profile);
if (!isset($update)) {
    die('Echec de la modification');
}
//redirection
header('location:?section=Profile');