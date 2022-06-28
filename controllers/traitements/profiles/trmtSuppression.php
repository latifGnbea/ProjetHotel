<?php
include_once('models/autresFonctions.php');
include_once('models/profileBd.php');
//declaration de la variabfa-pull-left
$id = secureGetPost($_POST['id']);
$passwordSuperAdmin = secureGetPost($_POST['passwordSuperAdmin']);
$confirmation = secureGetPost($_POST['re-passwordSuperAdmin']);
/**
 * Par defaut mot de pass du super admln est "123456789"
 */
$passDefautSA = '123456789';
//verification du profile avec son id 
$existenceProfile = selectAllUsersById($id);
if (!isset($existenceProfile) || isset($existenceProfile) && empty($existenceProfile)) {
    die('Desolé element selectionnée inexistent');
}
//conformite du mot de passe
if ($passwordSuperAdmin != $confirmation) {
    die('Mot de passe saisie non identique');
}
/**
 * Travail a faire si idee accepter 
 * Creation du table password Super admin 
 */

//comparaion avec le mot de passe du super admin
if($passDefautSA != $passwordSuperAdmin){
    die('Echec de la suppression');
}

//suppression du profile
$suppression = supprimerUsers($id);
if (!isset($suppression)) {
    die('Echec de la suppression');
}

header('location:index.php?section=Profile');