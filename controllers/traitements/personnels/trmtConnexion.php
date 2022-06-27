<?php
require('models/mesFonctions.php');
//declarations et verifications donnees
$username = secureGetPost($_POST['Username']);
$password = secureGetPost($_POST['Password']);

//traitements des donnees
//email
if (!secureEmail($username)) {
    include('views/includes/head.php');
    include('views/errorMsg/emailError.php');
    include('views/includes/foot.php');
}
//password
$taille = 2;
$trmtPassword = password($password, $taille);
if ($trmtPassword === false) {
    include('views/includes/head.php');
    include('views/errorMsg/pwError.php');
    include('views/includes/foot.php');
}
$password = $trmtPassword;

//verification de l'existence du username et son mot de passe
$login = selectControlersByLoginAndPasswd($username, $password);
if (isset($login) && empty($login) || !isset($login)) {
    include('views/includes/head.php');
    include('views/errorMsg/connectError.php');
    include('views/includes/foot.php');
}
foreach ($login as $infos) {
    $_SESSION['emailctrl'] = secureValueDecodeDB($infos['email_pe']);
    $_SESSION['photoctrl'] = secureValueDecodeDB($infos['photo']);
    $_SESSION['nomctrl'] = secureValueDecodeDB($infos['nom_pe']);
    $_SESSION['idctrl'] = secureValueDecodeDB($infos['id_pe']);
}
header('Location:?section=Profile');
//redirection