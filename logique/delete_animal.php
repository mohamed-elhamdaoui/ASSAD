<?php
include '../config/connection.php';

$id = $_GET["id"];

$sql = "delete from animaux where id = $id";
$conn->query($sql);
header("location: ../manage_animals.php");

?>