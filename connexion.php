<?php
      function bd_connect()
       {
         //connexion de la base de donnée
           try{
               $bdd=new PDO('mysql:host=localhost;dbname=tailleur_base','root','');

           }catch(Exception $e)
           {
               die('erreur:'.$e->getMessage());

           }
           return $bdd;
       }
       ?>