<?php
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedor Gabriel</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/assets/css/style.css">
    <script src="https://kit.fontawesome.com/2a8f6f7900.js" crossorigin="anonymous"></script>
</head>
<body>
        <nav class="navbar">
            <a href="<?=$BASE_URL?>">
                <div class="navbar__logo">
                    <p style="font-size: 2rem; color: white; text-align:center; line-height: 4.5rem;">Logo</p>
                </div>
            </a>
            <div class="navbar__menu">
                <a href="#" class="navbar__menu--text"><div class="navbar__menu--login" id="login">Login</div></a>
                <div class="navbar__menu--sep navbar__menu--text">|</div>
                <a href="<?=$BASE_URL?>register.php" class="navbar__menu--text"><div class="navbar__menu--register" id="register">Registre-se</div></a>
            </div>
        </nav>