<?php
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

<section class="uprojetos">
    <form action="helpers/db_update.php?see=<?=$_GET['see']?>" class="uprojetos__form" method="POST">
        <img src="<?=$seeprojetos->imagem?>" class="uprojetos__form--img">
        <input type="file"  name="imagem" value="<?=$seeprojetos->imagem?>" class="uprojetos__form--file">
        <input type="text"  name="nome" placeholder="Nome"value="<?=$seeprojetos->nome?>"  class="uprojetos__form--input">
        <input type="text"  name="descricao" placeholder="Descrição" value="<?=$seeprojetos->descricao?>" class="uprojetos__form--input">
        <input type="text"  name="tech1" placeholder="Tecnologia 01" value="<?=$seeprojetos->tech1?>" class="uprojetos__form--input">
        <input type="text"  name="tech2" placeholder="Tecnologia 02" value="<?=$seeprojetos->tech2?>" class="uprojetos__form--input">
        <input type="text"  name="tech3" placeholder="Tecnologia 03" value="<?=$seeprojetos->tech3?>" class="uprojetos__form--input">
        <input type="text"  name="link" placeholder="Link do Deploy" value="<?=$seeprojetos->link?>" class="uprojetos__form--input">
        <input type="submit" value="Editar"  class="uprojetos__form--button">
    </form>
</section>