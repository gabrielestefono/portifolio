<?php
session_start();
include_once("./helpers/url.php");
include_once("./templates/header.php");
include_once("./helpers/db_request.php");
?>
<section class="admin">
    <form class="login" action="login.php" method="POST">
        <input type="text" placeholder="Nome" class="login__name-pass" name="nome" required>
        <input type="password" placeholder="Senha" class="login__name-pass" name="senha" required>
        <button class="login__button" type="submit">Entrar</button>
    </form>
</section>
