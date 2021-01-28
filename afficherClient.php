<?php
  include('connexion.php');
 $bdd = bd_connect();

 // SUPPRESSION
if(isset($_POST['supprimer']))
{
    //var_dump($_POST['supprimer']);
    $id_client = $_POST['supprimer'];
    $req= $bdd->prepare("DELETE FROM client WHERE id_client= '$id_client' ");
    $req->execute(); 
}

$req2=$bdd->prepare('SELECT * FROM client');
$req2->execute();

?>
<!-- Affichage des clients enregistres dans la base de donnee   -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<table border="12px" class="table table-bordered">
 <thead>
  <tr>
    <th>id_client</th>
    <th>Nom_client</th>
    <th>Prénom_client</th>
    <th>Adresse_client</th>
    <th>Numéro_tel_client</th>
    <th>Date_apport</th>
    <th>Date_recup</th>
    <th>civilite_client</th>
    <th>Message_client</th>
    <th>Action</th>
 </thead>
 <tbody>
   <?php while($requte=$req2->fetch(PDO::FETCH_OBJ))  {?>
    <tr>
     <td><?= $requte->id_client ?></td>  
     <td><?= $requte->Nom_client ?></td>
     <td><?= $requte->Prenom_client ?></td>
     <td><?= $requte->Adresse_client ?></td>
     <td><?= $requte->Numero_tel_client ?></td>
     <td><?= $requte->Date_apport ?></td>
     <td><?= $requte->Date_recup ?></td>
     <td><?= $requte->civilite_client ?></td>
     <td><?= $requte->Message_client ?></td>

      <td>
      <form action="#" method="post">
      <button name="modifier" type ="submit" value="<?=$requte->id_client?>" class="btn btn-info">Modifier</button> 

      <button name="supprimer" type="submit" value="<?=$requte->id_client?>" class="btn btn-danger">Supprimer</button> 
      </form>
          </td>
    </tr>
   <?php } ?>
   </tbody> 
</table>

<?php
// MODIFICATION
if(isset($_POST['modifier']))
{ 
  //var_dump($_POST['modifier']);
  $id_client = $_POST['modifier'];
  
  ?>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulaire PHP</title>
    </head>
<body>  
        <h1>MODIFICATION DE CONTACT</h1>
   <form action="modifier.php" method="post">
   <table>
       <tr>
           <td>Nom_client</td>
           <td><label>
           <input type="text" name="Nom_client" size="50" value=" <?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
  $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
            echo  $requte->Nom_client;}?>"/>
           </label></td>
       </tr>
       <tr>
           <td>Prenom_client</td>
           <td><label>
           <input type="text" name="Prenom_client" size="50" value="<?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
  $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
            echo $requte->Prenom_client; } ?>"/>
           </label></td>
       </tr>
       <tr>
           <td>Adresse_client</td>
           <td><label>
           <input type="text" name="Adresse_client" size="50" value="<?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
  $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
            echo  $requte->Adresse_client;} ?>"/>
           </label></td>
       </tr>
       <tr>
           <td>Numero_tel_client</td>
           <td><label>
           <input type="text" name="Numero_tel_client" size="50" value="<?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
  $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
            echo  $requte->Numero_tel_client; }?>"/>
           </label></td>
       </tr>
       <tr>
           <td>Date_apport </td>
           <td><label>
           <input type="text" name="Date_apport" size="50" value="<?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
  $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
            echo  $requte->Date_apport; }?>"/>
           </label></td>
       </tr>
       <tr>
           <td>Date_recup</td>
           <td><label>
           <input type="text" name="Date_recup" size="50" value="<?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
  $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
            echo  $requte->Date_recup; }?>"/>
           </label></td>
       </tr>
  
       <tr>
           <td><input name="modifier" type="submit" value="Modifier"></td>
           <td><input name="supprimer" type="submit" value="Supprimer"></td>
       </tr>
       <tr>
           <td rowspan="2">civilite_client</td>
           <td><label>
             <input type="radio" name="civilite_client" >Homme</label></td>
       </tr>
       <tr>
           <td><label>
             <input type="radio" name="civilite_client">Femme</label></td>
       </tr>
       <tr>
            <td>Message_client</td>
            <td><textarea rows="5" name="Message_client" cols="60" ><?php  $req1= $bdd->prepare("SELECT * FROM client WHERE id_client= '$id_client' ");
            $req1->execute(); 
            while($requte=$req1->fetch(PDO::FETCH_OBJ))  {
          echo  $requte->Message_client; } ?></textarea></td>
       </tr>
       <input type="hidden" name="id_client" value=" <?php echo $id_client ?> ">
       <tr>
           <td><input name="valider" type="submit" value="Valider"></td>
       </tr>
   </table>
   </form>
  <?php
}
    ?>



