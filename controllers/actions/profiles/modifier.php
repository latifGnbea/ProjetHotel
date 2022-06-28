<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    include_once('controllers/traitements/profiles/trmtAffModification.php');
    include_once('views/includes/header.php');
    include_once('views/includes/footer.php');
}else{
    die('Eror 404');
}
