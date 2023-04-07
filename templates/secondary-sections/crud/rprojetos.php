<?php
    $host = "localhost";
    $db = "portfolio";
    $user = "gabriel";
    $password = "teste123";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);
        $stmt = $conn->prepare("SELECT * FROM `projetos` WHERE id=:id");
        $stmt->bindParam(':id', $_GET['see']);
        $stmt->execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        $seeprojetos = json_decode($dados['objeto']);
    }
?>

<section class="rprojetos">
    <p class="rprojetos__title"><?=$seeprojetos->nome?></p>
    <p class="rprojetos__description"><?=$seeprojetos->descricao?></p>
    <p class="rprojetos__tech"><?=$seeprojetos->tech1?></p>
    <p class="rprojetos__tech"><?=$seeprojetos->tech2?></p>
    <p class="rprojetos__tech"><?=$seeprojetos->tech3?></p>
    <p><a href="<?=$seeprojetos->link?>" class="rprojetos__link">Link aqui</a></p>
</section>