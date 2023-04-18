<?php

$host = "mysql670.umbler.com";
$db = "gabrielestefonop";
$user = "botblaze";
$password = "eunaosei";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$stmt = $conn->prepare("SELECT * FROM `projetos`");
$stmt->execute();
$listaprojetos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

$stmt = $conn->prepare("SELECT * FROM `about_me_paragraph`");
$stmt->execute();
$listaabout = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

$stmt = $conn->prepare("SELECT * FROM `contact`");
$stmt->execute();
$listacontact = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

$stmt = $conn->prepare("SELECT * FROM `tipo_habilidade`");
$stmt->execute();
$listaTipoHabilidade = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

$stmt = $conn->prepare("SELECT * FROM `habilidades`");
$stmt->execute();
$listaHabilidade = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

$stmt = $conn->prepare("SELECT * FROM `mensagens`");
$stmt->execute();
$listamensagens = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;

?>

