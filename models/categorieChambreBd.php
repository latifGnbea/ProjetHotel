<?php

   //***---**-**------*******************---------------------- Categorie chambres  -------*************************------------///////////////////
  //lecture
  function selectAllCategoriesChambre(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre`");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  } 
  //lecture
  function selectAllCategoriesChambreAsc(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre`  ORDER BY id ASC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  } 
  function selectAllCategoriesChambreAscByNom(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` AS u
      INNER JOIN app_profileutilisateur AS p ON p.id_pf = u.PROFILE_ID
      ORDER BY u.nom ASC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  } 
  
  function selectAllCategoriesChambreDesc(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` ORDER BY id DESC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }

  function selectCategoriesChambreByNom($nom){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` WHERE titre_cach=:nom");
      $element->bindParam('nom',$nom, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }

  //lecture
  function selectCategoriesChambreByEmail($email){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` WHERE email_pe=:email");
      $element->bindParam('email',$email, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //lecture
  function selectCategoriesChambreByTel($telephone){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` WHERE telephone_pe=:telephone");
      $element->bindParam('telephone',$telephone, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //lecture
  function selectCategoriesChambreByCni($cni){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` WHERE numCni_pe=:cni");
      $element->bindParam('cni',$cni, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //lecture
  function selectControlersByLoginAndPasswd($login,$pass){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `categoriechambre` WHERE `email_pe`= :logins AND password_pe= :pass");
      $element->bindParam('logins',$login, PDO::PARAM_STR);
      $element->bindParam('pass',$pass, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }
  //creation
  function ajouterCategoriesChambre($titre){
      include('models/dbconnect.php');
      $ajt= $bdd->prepare("INSERT INTO `categoriechambre`(titre_cach) 
      VALUES(:nom)");
      $ajt->bindParam('nom',$titre, PDO::PARAM_STR);
      $ajt-> execute() or die(print_r($ajt->errorInfo())); 
      return $ajt;
  }
  //Modifier
  function modifierCategoriesChambre($id, $nomPrenoms,$email,$pass,$img){
      include('models/dbconnect.php');
      $update= $bdd->prepare("UPDATE `categoriechambre`
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
  function supprimerCategoriesChambre($id){
      include('models/dbconnect.php');
      $sup= $bdd->prepare("DELETE FROM `categoriechambre` WHERE id = :id");
      $sup->bindParam('ids',$id, PDO::PARAM_INT);
      $sup-> execute() or die(print_r($sup->errorInfo())); 
      return $sup;
  }

?>