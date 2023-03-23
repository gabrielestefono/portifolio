<?php
include_once("./helper/url.php");
include_once("./templates/header.php")
?>
    <form class="login" action="admin.php" method="POST">
        <div class="login__email">
            <input type="email" name="" id="" class="login__email--input login__item-1" placeholder="Digite o seu email">
        </div>
        <div class="login__password">
            <input type="password" name="" id="" class="login__password--input login__item-1" placeholder="Digite a sua senha">
        </div>
        <div class="login__button">
            <input type="submit" value="Login"  class="login__button--button login__item-2">
        </div>
    </form>

<?php
include_once("./templates/footer.php")
?>