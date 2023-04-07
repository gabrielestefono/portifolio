<?php
session_start();
$show = '';
include_once("./helpers/url.php");
include_once("./templates/header.php");
include_once("./helpers/db_request.php");
if(!isset($_SESSION["nome"])){
    header('location: admin.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['project'])){
        $nome = "edit/" . $_POST['project'] . ".php";
        $show = true;
    }else{
        echo "Não";
    }
}
?>
        <section class="navaux">
            <form class="navaux__box" action="edit.php" method="POST">
                <button name="project" class="navaux__box--item" value="project">Projetos</button>
                <button name="about" class="navaux__box--item" value="about">Sobre mim</button>
                <button name="ability" class="navaux__box--item" value="ability">Habilidades</button>
                <button name="contact" class="navaux__box--item" value="contact">Contato</button>
            </form>
        </section>
        <?php if($show){
            include_once($nome);
        }?>
<?php
include_once('templates/footer.php');
?>