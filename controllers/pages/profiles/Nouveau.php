<?php
if (isset($_GET['action']) && !empty($_GET['action']) && is_file('controllers/actions/profiles/'.$_GET['action']).'.php') {
    include_once('controllers/actions/profiles/'.ucfirst($_GET['action']).'.php');
}else{
    header('location:index.php?section=Profile');
}