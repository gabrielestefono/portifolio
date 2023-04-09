<?php
    $id = $_GET['see'];
    $host = "localhost";
    $db = "portfolio";
    $user = "gabriel";
    $password = "teste123";
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $stmt = $conn->prepare("DELETE FROM `about_me_paragraph` WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $stmt = null;
    header('location: admin.php?pag=sobre-mim.php&type=1');
?>