<?php
if (isset($_GET['action']) && !empty($_GET['action']) && is_file('controllers/actions/personnels/'.$_GET['action']).'.php') {
    include_once('controllers/actions/personnels/'.ucfirst($_GET['action']).'.php');
}else{
    header('location:index.php?section=Personnel');
}