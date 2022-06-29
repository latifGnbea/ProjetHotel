<?php
if (isset($_POST['categoriesChambre']) && !empty($_POST['categoriesChambre'])) {
    include_once('controllers/traitements/categoriesChambres/trmtAjout.php');
}else{
    include_once('views/includes/header.php');
    include_once('views/errorMsg/champVide.php');
    include_once('views/includes/footer.php');
}