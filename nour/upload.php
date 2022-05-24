<?php

    include "connexion.php";
   
    if(isset($_POST["Nom"]) && isset($_POST["Email"]) && isset($_POST["Objet"])&& isset($_POST["Meesage"]))

    {
        
        $Nom= $_POST["Nom"];
        $Email= $_POST["Email"];
        $Objet= $_POST["Objet"];
        $Meesage= $_POST["Meesage"];

        $req = $link->prepare( "INSERT INTO tab(Nom,Email,Objet,Meesage) values('$Nom','$Email', '$Objet', '$Meesage')"); 
        
        
        $sauvegarde=$req->execute();                                     
        
        if($sauvegarde)
        {
            echo "insertion reussie";
            echo ' <a href="contact.php">Retourner sur le site</a>';
        }
        else
        {
            echo"erreur d'insertion";
        } 
    }
?>

