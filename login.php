<?php
session_start();
if(isset($_SESSION['nome'])){
    header("location: edit.php");
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if($nome == 'gabriel' && $senha == 'gabriel'){
        $_SESSION['nome'] = $nome;
        header('location: admin.php');
    }else{
        echo "Senha ou email errados, parça!";
    }
}


?>