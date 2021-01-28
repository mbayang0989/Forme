<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulaire d'inscription</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="authentification.php">
    </head>
<body> 
        <h1 class="text-center">FORMULAIRE D'INSCRIPTION</h1>
        <form class="form-control" action="insert.php" method="post" style="border:1px solid #ccc" >

  <div class="container">
        <h1>S'inscrire</h1>
        <p>Veuillez remplir ce formulaire d'incription</p>
        <hr>
    <div  class="mb-3">
        <label class="form-label" for="nom"><b>Nom</b></label>
        <input class="form-control" type="text" placeholder="Entrez votre nom" name="nom" size="50" required>
    </div>
   
    <div class="mb-3">  
        <label class="form-label" for="prenom"><b>Prenom</b></label>
        <input class="form-control" type="prenom" placeholder="Entrez votre prenom" name="prenom" size="50" required> 
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="email"><b>Email</b></label>
        <input class="form-control" type="email" placeholder="Entrez votre email" name="email" size="50" required>
    </div>

    <div class="mb-3">
        <label class="form-label" for="psw"><b>Mot_de_passe</b></label>
        <input class="form-control" type="password" placeholder="Entrez votre mot_de_passe" name="psw" size="50" required>
    </div>
    <div class="clearfix"> 
        <button type="submit" class="connbtn btn btn-warning" name="inscrire">S'inscrire</button>
        
    </div>
  </div>
</form>

</body>
</html>
