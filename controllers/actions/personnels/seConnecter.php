<?php
if (
    isset($_POST['Username']) && !empty($_POST['Username'])
    && isset($_POST['Password']) && !empty($_POST['Password'])
    ) {
    include_once('controllers/traitements/personnels/trmtConnexion.php');
}else{
    include('views/includes/header.php');
    include('views/errorMsg/champVide.php');
}