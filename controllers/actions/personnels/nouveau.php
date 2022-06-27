<?php
// var_dump($_POST);
if (
    isset($_POST['nomPrenom']) && !empty($_POST['nomPrenom']) 
    // isset($_POST['email']) && !empty($_POST['email']) &&
    // isset($_POST['password']) && !empty($_POST['password']) &&
    // isset($_POST['re-password']) && !empty($_POST['re-password']) &&
    // isset($_POST['telephone']) && !empty($_POST['telephone'])  &&
    // isset($_POST['numeroCni']) && !empty($_POST['numeroCni']) &&
    // isset($_POST['dateNaissance']) && !empty($_POST['dateNaissance'])
) {
    include_once('controllers/traitements/personnels/trmtAjout.php');
} else {
    include('views/includes/head.php');
    include('views/errorMsg/champVide.php');
    include('views/includes/foot.php');
}
