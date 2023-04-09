<?php
    $id = $_GET['see'];
    $host = "localhost";
    $db = "portfolio";
    $user = "gabriel";
    $password = "teste123";
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $stmt = $conn->prepare("DELETE FROM `tipo_habilidade` WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $stmt = null;
    header('location: admin.php?pag=habilidade.php&type=1');
    $conn = null;
?>