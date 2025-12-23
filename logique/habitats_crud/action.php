<?php
include '../../config/connection.php';

if (isset($_POST["update_habitat"])) {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $typeclimat = $_POST["typeclimat"];
    $description = $_POST["description"];
    $zonezoo = $_POST["zonezoo"];

    $updt_query = "UPDATE habitats set nom = \"$nom\" , typeclimat = \"$typeclimat\" , description = \"$description\" , zonezoo = \"$zonezoo\" where id = $id ";

    echo $updt_query;

    $conn->query($updt_query);

    header("location: ../../manage_habitats.php");
}

if (isset($_POST["add_habitat"])) {
    $nom = $_POST["nom"];
    $typeclimat = $_POST["typeclimat"];
    $description = $_POST["description"];
    $zonezoo = $_POST["zonezoo"];

    $nom_sec = mysqli_real_escape_string($conn, $_POST['nom']);
    $climat_sec = mysqli_real_escape_string($conn, $_POST['typeclimat']);
    $desc_sec = mysqli_real_escape_string($conn, $_POST['description']);
    $zone_sec = mysqli_real_escape_string($conn, $_POST['zonezoo']);

    $sql = "INSERT INTO habitats (nom, typeclimat, description, zonezoo) 
        VALUES ('$nom_sec', '$climat_sec', '$desc_sec', '$zone_sec')";

        $conn->query($sql);
    header("location: ../../manage_habitats.php");
}

$id = $_GET["delete_id"];

if(isset($id)){
    $dlt_query = "DELETE from habitats where id = $id" ;
    $conn->query($dlt_query);

    header("location: ../../manage_habitats.php");
    
}