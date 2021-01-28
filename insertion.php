<?php 
    include('connexion.php');

    $bdd= bd_connect();

    $nom=$_POST['Nom_client'];
    $prenom=$_POST['Prenom_client'];
    $adresse=$_POST['Adresse_client'];
    $numero_tel=$_POST['Numero_tel_client'];
    $date_apport=$_POST['Date_apport'];
    $date_recup=$_POST['Date_recup']; 
    $civilite=$_POST['civilite_client'];
    $message=$_POST['Message_client']; 

  if(isset($_POST['valider']))
  {
    $sql=$bdd->prepare("INSERT INTO client(Nom_client,Prenom_client,Adresse_client,Numero_tel_client,Date_apport,Date_recup,civilite_client,Message_client)
    VALUES ('$nom','$prenom','$adresse','$numero_tel','$date_apport','$date_recup','$civilite','$message')");
    $sql->execute();

    echo "insertion reussi";
    // var_dump($sql);
  
    header('location: afficherClient.php');
  }

 ?>