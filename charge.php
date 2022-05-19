<?php

include"connexion.php";

$nom=$_POST["nom"];
$Email=$_POST["Email"];
$Objet=$_POST["Objet"];
$Messages=$_POST["Messages"];
if(isset($_POST["nom"]) && isset($_POST["Email"]) && isset($_POST["Objet"]) && isset($_POST["Messages"])){
    $nom=$_POST["nom"];
$Email=$_POST["Email"];
$Objet=$_POST["Objet"];
$Messages=$_POST["Messages"];
    try {
        
        $insertion=$db->prepare("insert into formulaire_de_contact(nom,Email, Objet, Messages) values('$nom',$Email,$Objet,$Messages)");
        $execute=$insertion->execution();
        echo"Insertion reçue!";
    } catch (\Throwable $th) {
        echo"Erreur"; 
        //throw $th;
    }
}
else{
    echo"Verifiez les données saisies s'il vous plait!";
}


?>