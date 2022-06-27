<?php

   //***---**-**------*******************---------------------- User  -------*************************------------///////////////////
  //lecture
  function selectAllUsersAsc(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel`  ORDER BY id ASC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  } 
  function selectAllUsersAscByNom(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` AS u
      INNER JOIN app_profileutilisateur AS p ON p.id_pf = u.PROFILE_ID
      ORDER BY u.nom ASC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  } 
  
  function selectAllUsersDesc(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` ORDER BY id DESC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }

  function selectUsersByNom($nom){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` WHERE nom=:nom");
      $element->bindParam('nom',$nom, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }

  //lecture
  function selectUsersByEmail($email){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` WHERE email_pe=:email");
      $element->bindParam('email',$email, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //lecture
  function selectUsersByTel($telephone){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` WHERE telephone_pe=:telephone");
      $element->bindParam('telephone',$telephone, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //lecture
  function selectUsersByCni($cni){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` WHERE numCni_pe=:cni");
      $element->bindParam('cni',$cni, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //lecture
  function selectControlersByLoginAndPasswd($login,$pass){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `personnel` WHERE `email_pe`= :logins AND password_pe= :pass");
      $element->bindParam('logins',$login, PDO::PARAM_STR);
      $element->bindParam('pass',$pass, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //creation
  function ajouterUsers($nomPrenoms,$email,$pass,$tel,$cni,$pcni,$photo,$pp){
      include('models/dbconnect.php');
      $ajt= $bdd->prepare("INSERT INTO `personnel`(nomPrenoms_pe, email_pe, password_pe, telephone_pe, numCni_pe, photoCni_pe, photo_pe, inscriptionDate_pe,id_pp) 
      VALUES(:nomPrenoms, :email, :pass, :tel, :cni, pcni, :photo, now(), :pp)");
      $ajt->bindParam('nomPrenoms',$nomPrenoms, PDO::PARAM_STR);
      $ajt->bindParam('email',$email, PDO::PARAM_STR);
      $ajt->bindParam('pass',$pass, PDO::PARAM_STR);
      $ajt->bindParam('tel',$tel, PDO::PARAM_STR);
      $ajt->bindParam('cni',$cni, PDO::PARAM_STR);
      $ajt->bindParam('pcni',$pcni, PDO::PARAM_STR);
      $ajt->bindParam('photo',$photo, PDO::PARAM_STR);
      $ajt->bindParam('pp',$pp, PDO::PARAM_STR);
      $ajt-> execute() or die(print_r($ajt->errorInfo())); 
      return $ajt;
  }
  //Modifier
  function modifierUsers($id, $nomPrenoms,$email,$pass,$img){
      include('models/dbconnect.php');
      $update= $bdd->prepare("UPDATE `personnel`
      SET nomPrenoms = :nomPrenoms, email= :email,pass= :pass, img = :img
      WHERE id=:ids");
      $update->bindParam('nomPrenoms',$nomPrenoms, PDO::PARAM_STR);
      $update->bindParam('email',$email, PDO::PARAM_STR);
      $update->bindParam('pass',$pass, PDO::PARAM_STR);
      $update->bindParam('img',$img, PDO::PARAM_STR);
      $update->bindParam('ids',$id, PDO::PARAM_INT);
      $update-> execute() or die(print_r($update_->errorInfo())); 
      return $update_;

  }
  //supprimer
  function supprimerUsers($id){
      include('models/dbconnect.php');
      $sup= $bdd->prepare("DELETE FROM `personnel` WHERE id = :id");
      $sup->bindParam('ids',$id, PDO::PARAM_INT);
      $sup-> execute() or die(print_r($sup->errorInfo())); 
      return $sup;
  }

?>