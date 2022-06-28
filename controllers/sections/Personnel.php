<?php
if (isset($_GET['page']) && !empty($_GET['page']) && is_file('controllers/pages/personnels/'.$_GET['page']).'.php') {
    include_once('controllers/pages/personnels/'.ucfirst($_GET['page']).'.php');
}else{
    include('controllers/traitements/profiles/trmtAfficheAll.php');
    include_once('views/includes/header.php');
    include_once('views/personnels/pages-address-book.php');
    include_once('views/includes/footer.php');
}