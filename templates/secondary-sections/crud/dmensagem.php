<?php
    $id = $_GET['see'];
    $host = "mysql670.umbler.com";
    $db = "gabrielestefonop";
    $user = "botblaze";
    $password = "eunaosei";
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $stmt = $conn->prepare("DELETE FROM `mensagens` WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $stmt = null;
    header('location: admin.php?pag=mensagens.php&type=1');
?>