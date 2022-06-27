<?php
if (isset($_GET['section']) && !empty($_GET['section']) && is_file('controllers/sections/'.ucfirst($_GET['section'])).'.php') {
    include_once('controllers/sections/'.$_GET['section']).'.php';
}else{
    include_once('views/includes/header.php');
    include_once('views/pages-login.php');
}