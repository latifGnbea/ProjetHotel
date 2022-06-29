<?php
//***---**-**------*******************---------------------- AUTRES FONCTIONS  -------*************************------------///////////////////

function secureGetPost($getpost)
{
    $elmt = trim($getpost);
    $elmt = stripslashes($elmt);
    /**Demandé son role */
    $elmt = htmlspecialchars($elmt);
    $elmt = htmlentities($elmt, ENT_QUOTES, "UTF-8");
    return $elmt;
}
function secureValueDecodeDB($getpost)
{
    $elmt = trim($getpost);
    $elmt = htmlspecialchars($elmt);
    $elmt = html_entity_decode($elmt, ENT_QUOTES, "UTF-8");
    return $elmt;
}
function secureValueDB($getpost)
{
    $elmt = trim($getpost);
    $elmt = htmlspecialchars($elmt);
    return $elmt;
}
function formatValideNom($nom){
    $pattern  = '#[a-zA-Zéèçùàôî]#';
    if (preg_match($pattern,$nom)) {
        return true;
    }else{
        return false;
    }
}

function secureName($name)
{
    $pattern    = '/^(?:[;\/?:@&=+$,]|(?:[^\W_]|[-_.!~*\()\[\] ])|(?:%[\da-fA-F]{2}))*$/';
    if (preg_match($pattern, $name)) {
        return true;
    } else {
        return false;
    }
}
function secureEmail($mails)
{
    if (filter_var($mails, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
/**
 * Ajouté
 */
function trmtPassword($password, int $taille)
{
    /**
 * Doit être un minimum de 8 caractères
 * Doit contenir au moins 1 chiffre
 * Doit contenir au moins un caractère majuscule
 * Doit contenir au moins un caractère minuscule
 */
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    if (!$uppercase || !$lowercase || !$number || strlen($password) < $taille) {
        return false;
    } else {
        return md5($password);
    }
}

function cryptPassword($password){
    return md5($password);
}

function trmtTelephone($telephone){
    /**
     *  Doit debut par 00225
     * Suivi de 01 ou 05 ou 07
     * Doit egal à 15 chiffres
     * Sans espace
     */
    $debut = preg_match('@^(00225)@', $telephone);
    $reseau = preg_match('@((01)|(05)|07)@', $telephone);
    $corps = preg_match('@([0-9]{2}){4}$@', $telephone);
    if (!$debut || !$reseau || !$corps || strlen($telephone) !=15 ) {
        return false;
    }else{
        return $telephone;
    }
}

function trmtCni($numeroCni)
{
    /**
     * Doit avoir 3 caractere en miniscule
     * Suivi de 3 chiffre
     * sans espace
     */
    $formatCni = preg_match('#^[a-z]{3}[0-9]{3}$#', $numeroCni);
    if (!$formatCni) {
        return false;
    }else{
        return $numeroCni;
    }
}

// fin ajouté
function nombreCaractere($caract)
{
    return strlen($caract);
}

function traitementImage($img_nom, $place_tmp)
{

    $messages = array();
    $messages[0] = false; //initialisation de l'indice 0 a false
    //taille MAX de l'image
    $taille_max = 4000000;

    //Separer le nom et l'extension de l'image
    $images = explode('.', $img_nom);

    //Recuperation de l'extension de l'image
    $images_ext = end($images);

    //Rucuperation de la taille de l'image
    $taille = filesize($place_tmp);

    //Verifications des extensions Valider
    if (in_array(strtolower($images_ext), array('png', 'jpeg', 'jpg', 'gif', 'pdf')) === false) {

        $messages[1] = 'Fichier image non valide';
    }

    if (!file_exists($place_tmp)) {
        $messages[2] = 'Fichier image non valide';
    }

    if ($taille > $taille_max) {
        $messages[3] = 'Taille du fichiertrop grang';
    }

    //on recupere la hauteur, la largeur puis le type du fichier
    $images_size = getimagesize($place_tmp);
    //Verification suplementaire des extensions
    if ($images_size['mime'] == 'image/jpeg') {
        $images_src = imagecreatefromjpeg($place_tmp);
    } else if ($images_size['mime'] == 'image/png') {
        $images_src = imagecreatefrompng($place_tmp);
    } else if ($images_size['mime'] == 'image/gif') {
        $images_src = imagecreatefromgif($place_tmp);
    } else {
        $messages[4] = 'Fichier image non valide';
    }

    $nom_img = str_shuffle(md5(time() . $img_nom));

    if (count($messages) <= 1) {
        $messages[0] = true;
        $messages[1] = $images_src;
        $messages[2] = $nom_img;
        $messages[3] = $images_ext;
    }
    return $messages;
}

function traitementDocument($img_nom, $place_tmp, $type)
{

    $messages = array();
    $messages[0] = false; //initialisation de l'indice 0 a false
    //taille MAX de l'image
    $taille_max = 4000000;

    //Separer le nom et l'extension de l'image
    $images = explode('.', $img_nom);

    //Recuperation de l'extension de l'image
    $images_ext = end($images);

    //Rucuperation de la taille de l'image
    $taille = filesize($place_tmp);

    //Verifications des extensions Valider
    if (in_array(strtolower($images_ext), array('pdf', 'doc', 'docx', 'xls', 'xlsx')) === false) {

        $messages[1] = 'Fichier image non valide';
    }

    if (!file_exists($place_tmp)) {
        $messages[2] = 'Fichier image non valide';
    }

    if ($taille > $taille_max) {
        $messages[3] = 'Taille du fichiertrop grang';
    }

    //on recupere la hauteur, la largeur puis le type du fichier

    //Verification suplementaire des extensions
    if ($type == 'image/jpeg') {
        $images_src = imagecreatefromjpeg($place_tmp);
    } else if ($type == 'image/png') {
        $images_src = imagecreatefrompng($place_tmp);
    } else if ($type == 'image/gif') {
        $images_src = imagecreatefromgif($place_tmp);
    } else if ($type == 'application/pdf') {
        $images_src = $place_tmp;
    } else {
        $messages[4] = 'Fichier image non valide';
    }

    $nom_img = str_shuffle(md5(time() . $img_nom));

    if (count($messages) <= 1) {
        $messages[0] = true;
        $messages[1] = $images_src;
        $messages[2] = $nom_img;
        $messages[3] = $images_ext;
    }
    return $messages;
}

function nombreEnregistrement($table)
{
    include('models/dbconnect.php');
    //liste des categories
    $element = $bdd->prepare("SELECT count(*) AS nbreTotal FROM `$table`");
    $element->execute() or die(print_r($element->errorInfo()));
    $liste = $element->fetchAll();
    foreach ($liste as $nbres) {
        $nbreTotal = $nbres['nbreTotal'];
    }
    return $nbreTotal;
}
