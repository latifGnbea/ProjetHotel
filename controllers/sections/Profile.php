<?php
if (isset($_GET['page']) && !empty($_GET['page']) && is_file('controllers/pages/profiles/'.$_GET['page']).'.php') {
    include_once('controllers/pages/profiles/'.$_GET['page'].'.php');
}else{
    include('controllers/traitements/profiles/trmtAfficheAll.php');
    include_once('views/includes/header.php');
    include_once('views/profiles/table-datatables.php');
    include_once('views/includes/footer.php');
}