<?php
session_start();
include_once("./helpers/url.php");
include_once("./templates/header.php");
include_once("./helpers/db_request.php");
if(!isset($_SESSION["nome"])){
    header('location: admin.php');
}

?>
        <section class="projects">
            <h2 class="projects__title">Projetos</h2>
            <div class="projects__cards">
                <form class="projects__cards--card" method="POST" action="helpers/db_save.php">
                    <input type="file" name="imagem">
                    <input type="text" name="nome" placeholder="Nome do Projeto" class="projects__cards--send_input">
                    <input type="text" name="descricao" placeholder="Descrição" class="projects__cards--send_input">
                    <input type="text" name="tech1" placeholder="Tecnologia 01" class="projects__cards--send_input">
                    <input type="text" name="tech2" placeholder="Tecnologia 02" class="projects__cards--send_input">
                    <input type="text" name="tech3" placeholder="Tecnologia 03" class="projects__cards--send_input">
                    <input type="text" name="link" placeholder="Link do Deploy" class="projects__cards--send_input">
                    <input type="submit" value="Enviar Projeto" class="projects__cards--send_button">
                </form>
            </div>
        </section>
<?php
include_once('templates/footer.php');
?>