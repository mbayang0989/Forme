<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulaire PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
<body>  
        <h1>FORMULAIRE DE CONTACT</h1>
        <td>
      <form action="authentification.php" method="post" class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button name="deconnecter" type ="submit" value="" class="btn btn-danger"><a href="authentification.php"></a>DECONNECTER</button> 
      </form>
        </td>
          
         <form action="insertion.php" method="post">
            <table>
                <tr>
                    <td>Nom_client</td>
                    <td><input type="text" name="Nom_client" size="50"></td>
                </tr>
                <tr>
                    <td>Prenom_client</td>
                    <td><input type="text" name="Prenom_client" size="50"></td>
                </tr>
                <tr>
                    <td>Adresse_client</td>
                    <td><input type="text" name="Adresse_client" size="50"></td>
                </tr>
                <tr>
                    <td>Numero_tel_client:</td>
                    <td><input type="text" name="Numero_tel_client" size="50"></td>
                </tr>
                <tr>
                    <td>Date_apport </td>
                    <td><input type="text" name="Date_apport" size="50"></td>
                </tr>
                <tr>
                    <td>Date_recup</td>
                    <td><input type="text" name="Date_recup" size="50"></td>
                </tr>

                <tr>
                    <td><input name="modifier" type="submit" value="Modifier"></td>
                    <td><input name="supprimer" type="submit" value="Supprimer"></td>
                </tr>
                <tr>
                    <td rowspan="2">civilite_client</td>
                    <td><input type="radio" name="civilite_client" value="Homme">Homme</td>
                </tr>
                <tr>
                    <td><input type="radio" name="civilite_client" value="Femme">Femme</td>
                </tr>
                <tr>
                    <td>Message_client</td>
                    <td><textarea rows="20" name="Message_client" cols="60"></textarea></td>
                </tr>
                <tr>
                    <td><input name="valider" type="submit" value="Envoyer"></td>
                </tr>
            </table>
            </form>
            </body>
           </html>
            
   
            
 
            

