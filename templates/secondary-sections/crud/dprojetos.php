<?php

$host = "mysql670.umbler.com";
$db = "gabrielestefonop";
$user = "botblaze";
$password = "eunaosei";
$id = $_GET['see'];
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$stmt = $conn->prepare("DELETE FROM `projetos` WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$stmt  = null;
header('location: admin.php');
?>