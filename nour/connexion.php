<?php
$user="root";
$mdp="";
$bd="formule";
$server="localhost";
 
$link= new PDO($server, $user, $mdp, $bd);

if($link)
{
    echo"Connexion rétablie"; 
}
else
{
    die("ERROR");
}
?>