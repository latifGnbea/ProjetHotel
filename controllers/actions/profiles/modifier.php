<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    include_once('controllers/traitements/profiles/trmtAffModification.php');
    include_once('views/includes/header.php');
    include_once('views/profiles/formulaireModification.php');
    include_once('views/includes/footer.php');
}elseif(
    isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['profile']) && !empty($_POST['profile'])
){
    include_once('controllers/traitements/profiles/trmtModification.php');
}
else{
    die('Eror 404');
}
