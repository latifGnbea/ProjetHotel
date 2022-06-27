<?php
if (isset($_GET['page']) && !empty($_GET['page']) && is_file('controllers/pages/profiles/'.$_GET['page']).'.php') {
    include_once('controllers/pages/profiles/'.$_GET['page'].'.php');
}else{
    include_once('views/includes/head.php');
    include_once('views/profiles/table-datatables.php');
    include_once('views/includes/foot.php');
}