<?php
session_start();
include_once("./helpers/url.php");
include_once("./templates/header.php");
include_once("./helpers/db_request.php");
include_once("./templates/secondary-sections/secnavbar.php");
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