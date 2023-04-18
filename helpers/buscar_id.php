<?php
    $host = "mysql670.umbler.com";
    $db = "gabrielestefonop";
    $user = "botblaze";
    $password = "eunaosei";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);
        $stmt = $conn->prepare("SELECT * FROM `projetos` WHERE id=:id");
        $stmt->bindParam(':id', $_GET['see']);
        $stmt->execute();
        $seeprojetos = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
    }
?>