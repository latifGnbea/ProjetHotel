<?php
include_once('models/autresFonctions.php');
include_once('models/profileBd.php');
//stocker dans une variable
$profile = secureGetPost($_POST['profile']);
//verification du format 
if (formatValideNom($profile) === false) {
   die('Nom invalide');
}
      //verification de son existence
$verifProfile = selectUsersByNom($profile);
if(isset($verifProfile) && !empty($verifProfile)){
   die('Ce profile existe deja dans la bd');
}
//ajout
$ajoutProfile = ajouterUsers($profile);
if (!isset($ajoutProfile)) {
   die('Echec de l\'ajout du profile');
}

// redirection
header('location:?section=Profile');
