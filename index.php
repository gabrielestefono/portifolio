<?php
session_start();
include_once("./helpers/url.php");
include_once("./templates/header.php");
include_once("./helpers/db_request.php");
include_once("./templates/primary-sections/hero_section.php");
include_once("./templates/primary-sections/about.php");
include_once("./templates/primary-sections/projects.php");
include_once("./templates/primary-sections/ability.php");
include_once("./templates/primary-sections/contact.php");
include_once("./helpers/db_request.php");
if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    $requisicao = "./templates/secondary-sections/" . $_POST['pagina'] . ".php";
    include_once($requisicao);
}
session_destroy();
?>
<?php
include_once('templates/footer.php');
?>