<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
    }catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
?>