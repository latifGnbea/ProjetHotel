<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    include('views/includes/header.php');
    include('views/profiles/validationSuppression.php');

    
}elseif (
    isset($_POST['passwordSuperAdmin']) && !empty($_POST['passwordSuperAdmin']) &&
    isset($_POST['re-passwordSuperAdmin']) && !empty($_POST['re-passwordSuperAdmin']) &&
    isset($_POST['id']) && !empty($_POST['id'])
    ) {
    include_once('controllers/traitements/profiles/trmtSuppression.php');
}

