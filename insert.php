<?php 
    include('connexion.php');

    $bdd= bd_connect();

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mot_de_passe=$_POST['psw'];
    
  if(isset($_POST['inscrire']))
  {
    $sql=$bdd->prepare("INSERT INTO utilisateur(Nom,Prenom,Email,Mot_de_passe)
    VALUES ('$nom','$prenom','$email','$mot_de_passe')");
    $sql->execute();

    echo "insertion reussi";
    // var_dump($sql);
  }
  
    header('location: afficheUtil.php');


 ?>