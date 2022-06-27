<?php
if (isset($_POST['profile']) && !empty($_POST['profile'])) {
    include_once('controllers/traitements/profiles/trmtAjout.php');
}else{
    include_once('views/includes/header.php');
    include_once('views/errorMsg/champVide.php');
    include_once('views/includes/footer.php');
}