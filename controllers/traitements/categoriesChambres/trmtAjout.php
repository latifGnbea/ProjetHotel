<?php
        //appel au models
include_once('models/autresFonctions.php');
include_once('models/categorieChambreBd.php');
//recuperation des donnees dans des varaiables
$categorieChambre = secureGetPost($_POST['categoriesChambre']);
//traitements des champs
    //titre
if (formatValideNom($categorieChambre) === false) {
    include_once('views/includes/header.php');
    include_once('views/errorMsg/nomNonValide.php');
}
//verification de l'existence dans la base de données
$verifCach = selectCategoriesChambreByNom($categorieChambre);
// $verifCach = selectAllCategoriesChambre();
if (isset($verifCach) && !empty($verifCach)) {
    include_once('views/includes/header.php');
    include_once('views/errorMsg/existeDeja.php');
}
//ajout dans la bd
//redirection