<?php
var_dump($_POST['Username']);
var_dump($_POST['Password']);
if (
    isset($_POST['Username']) && !empty($_POST['Username'])
    && isset($_POST['Password']) && !empty($_POST['Password'])
    ) {
    include_once('controllers/traitements/personnels/trmtConnexion.php');
}else{
    include('views/includes/head.php');
    include('views/errorMsg/champVide.php');
    include('views/includes/foot.php');
}