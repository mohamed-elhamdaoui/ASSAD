<?php
include '../../config/connection.php';



// echo $id;
if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $role = $_POST["role"];
    $email = $_POST["email"];
    $activeStatus = $_POST["activeStatus"];
    $sql = "UPDATE utilisateurs set nom = \"$nom\" , email = \"$email\" , role = \"$role\" , status_approbation = \"$activeStatus\" where id = $id ";

    $conn->query($sql);
    header("location: ../../manage_users.php");
}
