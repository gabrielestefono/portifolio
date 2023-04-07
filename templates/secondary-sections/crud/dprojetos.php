<?php

$host = "localhost";
$db = "portfolio";
$user = "gabriel";
$password = "teste123";
$id = $_GET['see'];
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$stmt = $conn->prepare("DELETE FROM `projetos` WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$stmt  = null;
header('location: admin.php');
?>