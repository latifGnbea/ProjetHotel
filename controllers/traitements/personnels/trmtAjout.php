<?php
include_once('models/autresFonctions.php');
include_once('models/personnelsFonctions.php');
//creations des variables
$nomPrenom = secureGetPost($_POST['nomPrenom']);
$email = secureGetPost($_POST['email']);
$password = secureGetPost($_POST['password']);
$rePassword = secureGetPost($_POST['re-password']);
$telephone = secureGetPost($_POST['telephone']);
$numeroCni = secureGetPost($_POST['numeroCni']);
//traitements des differentes données 
//email
if (secureEmail($email) === false) {
    die("Email invalide");
}
//existence de l'email dans la base de donnee
$verifEmail = selectUsersByEmail($email);
if (isset($verifEmail) && !empty($verifEmail)) {
    die('Email existe deja');
}
//password
//format du password


if (trmtPassword($password,5) === false) {
    die('Format du mot de passe incorrecte');
}

if ($password != $rePassword) {
    die('Veuillez inscrire le meme mot de passe');
}

//telephone


if (trmtTelephone($telephone) === false) {
    die('Numero de telephone incorrecte');
}
echo $telephone;
//existence du numero de tel dans la base de donnee
$verifTel = selectUsersByTel($telephone);
if (isset($verifTel) && !empty($verifTel)) {
    die('Ce numero de telephone existe deja');
}

//numero de la cni


if (trmtCni($numeroCni) === false) {
    die('Votre format est incorrecte');
}
//existence du numero de cni dans la base de donnee
$verifCni = selectUsersByCni($numeroCni);
if (isset($verifCni) && !empty($verifCni)) {
    die('Ce numero de cni existe deja');
}

//photo cni
//photo avatar

//ajout
