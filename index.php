<?php
include_once("templates/header.php");
?>
    <section class="first-section">
        <article>
            <div class="navegationitems">
                <div class="navegationitems__home" id="floating__home-btn"><img src="assets/image/home-icon.svg" alt="" class="navegationitems__icon"><p class="navegationitems__text">Home</p></div>
                <div class="navegationitems__projects" id="floating__projects-btn"><img src="assets/image/project-icon.svg" alt="" class="navegationitems__icon"><p class="navegationitems__text">Projetos</p></div>
                <div class="navegationitems__contact" id="floating__contact-btn"><img src="assets/image/contact-icon.svg" alt="" class="navegationitems__icon"><p class="navegationitems__text">Contato</p></div>
            </div>
        </article>
        <article class="aboutme">
            <div class="aboutme__profile">
                <div class="aboutme__profile--img"></div>
                <h1 class="aboutme__profile--name">Gabriel Estéfono</h1>
                <button class="aboutme__profile--btn" id="projects">Projetos</button>
                <button class="aboutme__profile--btn" id="contact">Contato</button>
                <button class="aboutme__profile--btn" id="learn">Aprenda Comigo</button>
            </div>
            <div class="aboutme__about">
                <h3 class="aboutme__about--title">SOBRE MIM</h3>
                <p class="aboutme__about--text">
                    Olá! Meu nome é Gabriel Estéfono, eu sou desenvolvedor frontend e atualmente, estou estudando para backend. <br> Eu sou de uma cidadezinha no interior de Minas Gerais, mas atualmente eu moro no paraná. Vim para cá a cerca de 6 anos a procura de melhores condições. Entrei em uma empresa de alimentos, que é onde atualmente eu trabalho, e é onde aprendi muito sobre trabalho em equipe e organização pessoal. Tive meu primeiro contato com web design, já bem novo, no site fundação Bradesco, mas nunca imaginei que iria trabalhar na área, mas tudo mudou a pouco mais de 2 anos, quando tive a ideia de começar meu negócio digital, e comecei a estudar um pouco sobre desenvolvimento web, acabei não conseguindo fazer o que gostaria, mas descobri que gostava da área, e então comecei a estudar data science, aprendi razoavelmente a trabalhar com python para análise de dados, descobri que o estudo de ciência de dados é muito imaginativo, pois não existem formas fáceis de medir o seu progresso. Então resolvi começar pelo frontend, já que a cada página criada, você claramente ver uma melhora. Quando achei que estava pronto, resolvi começar a estudar backend e estou no meu caminho para fullstack. 
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
                <a href="post.php"><img src="assets/image/exemplo.jpg" alt="" class="projects__card--image"></a>
                <p class="projects__card--title">Expenses chart component</p>
                <div class="projects__card--description">FrontEnd</div>
                <div class="projects__card--icons">
                <div class="projects__card--icons-icon">
                        <img src="assets/image/css3.svg" class="projects__card--icons-icon_img">
                    </div>
                    <div class="projects__card--icons-icon">
                        <img src="assets/image/html5.svg" class="projects__card--icons-icon_img">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="third-section">
        <article class="contact">
            <div class="contact__messenge">
                <p class="contact__messenge--title">Contato</p>
                <p class="contact__messenge--text">Entre em contato comigo, caso queira lorem impsum lore lorem impsum lore lorem.</p>
                <p class="contact__messenge--text">Caso também queira aprender algo do site lorem lorem impsum lore lorem impsum lore lorem.</p>
                <img src="assets/image/dispositivos.png" class="contact__messenge--image">
                <div class="contact__messenge--whatsapp">
                    <img src="assets/image/whatsapp.svg" class="contact__messenge--whatsapp-icon">
                </div>
            </div>
            <div class="contact__form">
                <input type="text" class="contact__form--name" placeholder="Seu nome">
                <input type="text" class="contact__form--email" placeholder="Seu email">
                <textarea class="contact__form--messenge" placeholder="Sua mensagem"></textarea>
                <input type="submit" class="contact__form--button"  value="Enviar">
            </div>
        </article>
    </section>   
    <script src="<?=$BASE_URL?>/assets/js/listeners.js" type="module"></script>
</body>
</html>