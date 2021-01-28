<?php
 include('connexion.php');
 $bdd = bd_connect();
$req1=$bdd->prepare('SELECT * FROM utilisateur');
$req1->execute();
?>
<!-- Affichage des utilisateur enregistres dans la base de donnee   -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<table border="12px" class="table table-bordered">
 <thead>
  <tr>
    
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Mot_de_passe</th>
   
 </thead>
 <tbody>
 <?php while($requte=$req1->fetch(PDO::FETCH_OBJ))  {?> 
    <tr>
     <td><?= $requte->Nom ?></td>  
     <td><?= $requte->Prenom ?></td>
     <td><?= $requte->Email ?></td>
     <td><?= $requte->Mot_de_passe ?></td>
      <td>
    </tr>   
       <?php } ?>
   </tbody> 
</table>

       