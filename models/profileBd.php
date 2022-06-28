<?php

   //***---**-**------*******************---------------------- User  -------*************************------------///////////////////
  //lecture
  function selectAllUsersAsc(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `profilepersonnel`  ORDER BY id_pp ASC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll(PDO::FETCH_OBJ);
      return $liste;
  } 
  //lecture
  function selectAllUsersById($id){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `profilepersonnel`  WHERE id_pp = :id");
      $element->bindParam('id',$id, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll(PDO::FETCH_OBJ);
      return $liste;
  } 
  function selectAllUsersAscByNom(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `profilepersonnel` AS u
      INNER JOIN app_profileutilisateur AS p ON p.id_pf = u.PROFILE_ID
      ORDER BY u.nom ASC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  } 
  
  function selectAllUsersDesc(){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `profilepersonnel` ORDER BY id DESC");
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }

  function selectUsersByNom($nom){
      include('models/dbconnect.php');
      $element= $bdd->prepare("SELECT * FROM `profilepersonnel` WHERE titre_pp=:nom");
      $element->bindParam('nom',$nom, PDO::PARAM_STR);
      $element-> execute() or die(print_r($element->errorInfo())); 
      $liste = $element->fetchAll();
      return $liste;
  }

  //creation
  function ajouterUsers($nom){
      include('models/dbconnect.php');
      $ajt= $bdd->prepare("INSERT INTO `profilepersonnel`(titre_pp) 
      VALUES(:nom)");
      $ajt->bindParam('nom',$nom, PDO::PARAM_STR);
      $ajt-> execute() or die(print_r($ajt->errorInfo())); 
      return $ajt;
  }
  //Modifier
  function modifierUsers($id, $titre){
      include('models/dbconnect.php');
      $update= $bdd->prepare("UPDATE `profilepersonnel`
      SET titre_pp = :titre
      WHERE id_pp=:id");
      $update->bindParam('titre',$titre, PDO::PARAM_STR);
      $update->bindParam('id',$id, PDO::PARAM_INT);
      $update-> execute() or die(print_r($update->errorInfo())); 
      return $update;

  }
  //supprimer
  function supprimerUsers($id){
      include('models/dbconnect.php');
      $sup= $bdd->prepare("DELETE FROM `profilepersonnel` WHERE id_pp = :id");
      $sup->bindParam('id',$id, PDO::PARAM_INT);
      $sup-> execute() or die(print_r($sup->errorInfo())); 
      return $sup;
  }

?>