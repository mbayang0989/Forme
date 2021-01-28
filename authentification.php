<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>formulaire d'autentification</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
<body> 
        <div class="container">
                    <p class="text-center">Veuillez remplir ce formulaire pour accéder sur votre compte.</p>
                    <hr>
     <form class="form-control" action="taille.php" style="border:1px solid #ccc"  method="post" >
        <fieldset>
            <h2 class="text-center">FORMULAIRE D'AUTHENTIFICATION</h2>
                
        <div  class="mb-3">
            <label class="form-label" for="email"><b>Email</b></label>
            <input class="form-control" type="text" placeholder="Entrez l'Email" name="email" size="8" required>
        </div>
   
        <div class="mb-3">  
            <label class="form-label" for="psw"><b>Mot de passe</b></label>
            <input class="form-control" type="password" placeholder="Entrer le mot de passe" name="psw" size="8" required> 
        </div>
        <div class="clearfix">
            <button type="submit" class="connbtn btn btn-success">Connecter</button>
        </div>
  </div>
  </fieldset>
</form>
</body>
    <td>
       <form action="inscrire.php" method="post" class="text-center">
        <p>Veuillez inscrire sur le formulaire d'inscription si vous n' avez pas de  compte.</p>
                    <hr>
        <button name="inscrire" type ="submit" value="" class="btn btn-warning"><a href="inscrire.php"></a>S'inscrire</button> 
       </form>
    </td>

</html>