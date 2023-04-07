<?php
session_start();
$show = '';
include_once("./helpers/url.php");
include_once("./templates/secondary-sections/header.php");
include_once("./helpers/db_request.php");
include_once("./helpers/buscar_id.php");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['pag'])){
        $loadpag = "./templates/secondary-sections/" . $_GET["pag"];
        include_once($loadpag);
    }else{
        include_once("./templates/secondary-sections/projetos.php");
    }
}else{
    include_once("./templates/secondary-sections/projetos.php");
}

if(!isset($_SESSION["nome"])){
    header('location: auth.php');
}
include_once('templates/footer.php');
?>