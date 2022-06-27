<?php
if (isset($_GET['page']) && !empty($_GET['page']) && is_file('controllers/pages/profiles/'.$_GET['page']).'.php') {
    include_once('controllers/pages/profiles/'.$_GET['page'].'.php');
}else{
    include_once('views/includes/header.php');
    include_once('views/profiles/table-basic.php');
    include_once('views/includes/footer.php');
}