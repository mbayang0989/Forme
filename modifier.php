<?php
//error_reporting(E_ALL);

// Connexion à la BDD

require_once("Connexion.php");
$bdd= bd_connect();

$id_client=$_POST['id_client'];
$nom=$_POST['Nom_client'];
$prenom=$_POST['Prenom_client'];
$adresse=$_POST['Adresse_client'];
$numero_tel=$_POST['Numero_tel_client'];
$date_apport=$_POST['Date_apport'];
$date_recup=$_POST['Date_recup']; 
$civilite=$_POST['civilite_client'];
$message=$_POST['Message_client']; 

//traitement du Submit

if(isset($_POST['valider']))
{
 
  $sql =$bdd->prepare("UPDATE client
       SET Nom_client='$nom',
           Prenom_client='$prenom',
           Adresse_client='$adresse',
           Numero_tel_client='$numero_tel',
           Date_apport='$date_apport',
           Date_recup='$date_recup',
           civilite_client='$civilite',
           Message_client='$message'
      WHERE id_client='$id_client' ");
  $sql->execute();

  echo "insertion reussi";
}

// var_dump($sql);
header('location: afficherClient.php');
 ?>
 