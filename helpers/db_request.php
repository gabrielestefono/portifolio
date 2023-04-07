<?php
$host = "localhost";
$db = "portfolio";
$user = "gabriel";
$password = "teste123";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$stmt = $conn->prepare("SELECT * FROM `projetos`");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

$stmt = $conn->prepare("SELECT * FROM `about_me_paragraph`");
$stmt->execute();
$paragrafos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

?>

