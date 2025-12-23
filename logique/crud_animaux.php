<?php
include '../config/connection.php';


if (isset($_POST["save"])) {
    print_r($_POST);


    $nom = $_POST["nom"];
    $espece = $_POST["espece"];
    $paysorigine = $_POST["paysorigine"];
    $id_habitat = $_POST["id_habitat"];
    $alimentation = $_POST["alimentation"];
    $image = $_POST["image"];
    $descriptioncourte = $_POST["descriptioncourte"];

    $sql = "insert into animaux (nom , espece , alimentation , image , paysorigine , descriptioncourte , id_habitat) values ('$nom','$espece','$alimentation','$image','$paysorigine','$descriptioncourte','$id_habitat')";

    $conn->query($sql);
    header("location: ../manage_animals.php");
}
if (isset($_POST["save_edit"])) {
    $id = $_POST["id"];
    
    print_r($_POST);
    $nom = $_POST["nom"];
    $espece = $_POST["espece"];
    $paysorigine = $_POST["paysorigine"];
    $id_habitat = $_POST["id_habitat"];
    $alimentation = $_POST["alimentation"];
    $image = $_POST["image"];
    $descriptioncourte = $_POST["descriptioncourte"];

    $sql1 = "update animaux set nom = \"$nom\" , espece = \"$espece\" , alimentation = \"$alimentation\" , image = \"$image\" , paysorigine = \"$paysorigine\" , descriptioncourte = \"$descriptioncourte\" where id = $id  ";

    $conn->query($sql1);
    header("location: ../manage_animals.php");
}

