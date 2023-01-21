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
    <section class="first-section">
        <nav class="navbar">
            <div class="navbar__logo">
                <p style="font-size: 2rem; color: white; text-align:center; line-height: 4.5rem;">Logo</p>
            </div>
            <div class="navbar__menu">
                <a href="#" class="navbar__menu--text"><div class="navbar__menu--login" id="login">Login</div></a>
                <div class="navbar__menu--sep navbar__menu--text">|</div>
                <a href="#" class="navbar__menu--text"><div class="navbar__menu--register" id="register">Registre-se</div></a>
            </div>
        </nav>
        <article class="aboutme">
            <div class="aboutme__profile">
                <div class="aboutme__profile--img"></div>
                <h1 class="aboutme__profile--name"> Gabriel Estéfono</h1>
                <button class="aboutme__profile--btn" id="projects">Projetos</button>
                <button class="aboutme__profile--btn" id="contact">Contato</button>
                <button class="aboutme__profile--btn" id="learn">Aprenda Comigo</button>
            </div>
            <div class="aboutme__about">
                <h3 class="aboutme__about--title">Título Sobre mim</h3>
                <p class="aboutme__about--text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis pariatur illo sunt facere debitis! Molestias temporibus sequi iure fuga autem, sint mollitia quod ratione nobis a saepe ut reiciendis consequuntur?
                Asperiores deleniti labore nihil quod in, veritatis sit qui vero. Sit cum id ullam culpa! At consectetur placeat dicta. Fuga accusamus tempora, explicabo commodi quaerat ipsum. Obcaecati ipsa eum ipsum!
                Ut aliquam deleniti sapiente soluta totam. Ea quibusdam aliquid vitae culpa eveniet ipsum hic officia earum corporis fuga maiores, quae debitis ipsa dicta corrupti velit tempore sapiente aspernatur nisi sed.
                Blanditiis ex dolores ut doloremque totam iure. Ipsam vero nulla porro similique! Id exercitationem possimus harum magni, omnis aspernatur quam dignissimos assumenda. Mollitia ex beatae dolores velit et, nam eligendi!
                Expedita accusantium vitae adipisci illum sunt minus blanditiis doloremque magni explicabo, excepturi quasi maiores perferendis qui. Autem nesciunt beatae expedita cupiditate, accusamus dignissimos, dolorum tempora ipsa minus perferendis excepturi id.
                </p>
            </div>
        </article>
    </section>
    <section class="second-section">
        <article class="secondnavbar">
            <div class="second-navbar">
                <div class="second-navbar__show">Mostrar<i class="fa-solid fa-filter filter1"></i></div>
                <div class="second-navbar__filters">
                    <div class="second-navbar__order second-navbar__item">Ordenar<i class="fa-solid fa-filter filter1"></i></div>
                    <div class="second-navbar__filter second-navbar__item">Filtrar<i class="fa-solid fa-filter filter1"></i></div>
                </div>
            </div>
        </article>
        <article class="projects">
            <div class="projects__card">
                <img src="assets/image/card1.jpg" alt="" class="projects__card--image">
                <p class="projects__card--title">Expenses chart component</p>
                <div class="projects__card--description">FrontEnd</div>
                <div class="projects__card--icons">
                <div class="projects__card--icons-icon">
                        <img src="assets/image/css3.svg" class="projects__card--icons-icon_img">
                    </div>
                    <div class="projects__card--icons-icon">
                        <img src="assets/image/html5.svg" class="projects__card--icons-icon_img">
                    </div>
                    <div class="projects__card--icons-icon">
                        <img src="assets/image/html5.svg" class="projects__card--icons-icon_img">
                    </div>
                    <div class="projects__card--icons-icon">
                        <img src="assets/image/html5.svg" class="projects__card--icons-icon_img">
                    </div>
                    <div class="projects__card--icons-icon">
                        <img src="assets/image/html5.svg" class="projects__card--icons-icon_img">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="third-section"></section>   
    <script src="<?=$BASE_URL?>/assets/js/listeners.js" type="module"></script>
</body>
</html>