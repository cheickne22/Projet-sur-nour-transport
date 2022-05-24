<?php

include"connexion.php";

$nom=$_POST["nom"];
$Email=$_POST["Email"];
$Objet=$_POST["Objet"];
$Messages=$_POST["Messages"];
if(isset($_POST["nom"]) && isset($_POST["Email"]) && isset($_POST["Objet"]) && isset($_POST["Messages"]))
{
    $nom=$_POST["nom"];
    $Email=$_POST["Email"];
    $Objet=$_POST["Objet"];
    $Messages=$_POST["Messages"];
    try {
        
        $insertion = mysqli_query($link,"insert into formulaire_de_contact(nom,Email, Objet, Messages) values('$nom','$Email','$Objet','$Messages')");
        
        if($insertion){
            echo"Insertion reçue!";

        }
        else{
            echo"ERRER";
        }
    } catch (\Throwable $th) {
        echo"Erreur"; 
        //throw $th;
    }
}

?>