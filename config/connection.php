<?php

$host = "localhost";
$root = "momo";
$password = "momo1";
$port = "3307";
$db = "zoo_assad";  


$conn = new mysqli($host,$root,$password ,$db,$port);

if(!$conn){
    die("connexion failed! :" .$conn->connect_error);
}


 
?>