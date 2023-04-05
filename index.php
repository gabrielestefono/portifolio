<?php
include_once("./helpers/url.php");
include_once("./templates/header.php");
include_once("./helpers/db_request.php");
?>
        <section class="hero">
            <h1 class="hero__name">Gabriel Estéfono</h1>
            <p class="hero__presents">Desenvolvedor Full-Stack</p>
            <button class="hero__see">Veja meus projetos</button>
        </section>
        <section class="about">
            <h2 class="about__title">Sobre mim</h2>
            <div class="about__content">
                <img src="assets/img/foto.png" alt="Foto do desenvolvedor" class="about__content--profile"> 
                <div class="about__content--box">
                    <p class="about__content--presents">Olá! Meu nome é Gabriel Estéfono.</p>
                    <p class="about__content--presents"> Eu sou um Desenvolvedor Full Stack, apaixonado por criar soluções inovadoras e eficientes. Com habilidade, técnicas e uma mente criativa, estou sempre em busca de novos desafios e oportunidades para aprimorar minhas habilidades e ajudar a transformar ideias em realidade.</p>
                    <p class="about__content--presents">Meu conhecimento em desenvolvimento abrange tanto o front-end quanto o back-end, permitindo-me criar soluções completas e coesas para os mais diversos projetos. No front-end, domino tecnologias como HTML, CSS e JavaScript, além do framework React. Isso me permite criar interfaces de usuário intuitivas, responsivas e atraentes.</p>
                    <p class="about__content--presents">No back-end, tenho experiência em algumas linguagens de programação, como Python, PHP, e Linguagem C, bem como o framework Django. Também tenho experiência com bancos de dados relacionais, como MySQL e PDO.</p>
                    <p class="about__content--presents">Se você está procurando um Desenvolvedor Full Stack motivado, dedicado e altamente qualificado para ajudar a impulsionar seu projeto ou empresa, não hesite em entrar em contato comigo. Estou ansioso para colaborar com você e criar soluções excepcionais juntos!</p>
                </div>
                <a href="curriculo.pdf" class="about__content--cv" download>Baixar currículo</a>
            </div>
        </section>

        
        <section class="projects">
            <h2 class="projects__title">Projetos</h2>
            <div class="projects__cards">
                <?php foreach($resultado as $projeto):?>
                    <?php $valor = json_decode($projeto['objeto']) ?>
                    <div class="projects__cards--card">
                        <img src="<?=$valor->imagem?>" alt="" class="projects__cards--card_img">
                        <p class="projects__cards--card_title"><?=$valor->nome?></p>
                        <p class="projects__cards--card_text"><?=$valor->descricao?></p>
                        <ul class="projects__cards--card_tech">
                            <li class="projects__cards--card_tech-tec"><?=$valor->tech1?></li>
                            <li class="projects__cards--card_tech-tec"><?=$valor->tech2?></li>
                            <li class="projects__cards--card_tech-tec"><?=$valor->tech3?></li>
                        </ul>
                        <a href="<?=$valor->link?>"><button class="projects__cards--card_button">Ver Projeto</button></a>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
        <section class="ability">
            <h2 class="ability__title">Habilidades</h2>
            <div class="ability__categories">
                <div class="ability__categories--category">
                    <div class="ability__categories--category_sep">
                    <!-- Devido à grande quantidade de classes incubadas dentro de outras, vou recomeçar a partir daqui-->
                        <h3 class="area">Front-End</h3>
                        <ul class="tech">
                            <li class="tech__card">
                                <img src="assets/img/html5.webp" alt="HTML5" class="tech__card--img">
                                <p class="tech__card--desc">HTML5</p>
                            </li>
                        </ul>
                    </div>
                    <div class="ability__categories--category_sep">
                        <h3 class="area">Back-End</h3>
                        <ul class="tech">
                        <li class="tech__card">
                            <img src="assets/img/html5.webp" alt="HTML5" class="tech__card--img">
                            <p class="tech__card--desc">HTML5</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="contact">
            <h2 class="contact__title">Contato</h2>
            <p class="contact__text">Olá! Eu sou um desenvolvedor e criei este portfólio para mostrar meu trabalho.</p>
            <p class="contact__text">Se quiser trabalhar comigo ou apenas conversar sobre desenvolvimento de software, entre em contato. </p>
            <p class="contact__text">Vamos trocar ideias e ver como podemos colaborar. </p>
            <p class="contact__text">Obrigado por visitar meu portfólio!</p>
            <form class="contact__form">
                <input type="text" placeholder="Nome" class="contact__form--input" required>
                <input type="email" placeholder="E-mail" class="contact__form--input" required>
                <input type="text" placeholder="Assunto" class="contact__form--input" required>
                <textarea placeholder="Mensagem" class="contact__form--textarea" required></textarea>
                <button class="contact__form--button" type="submit">Enviar mensagem</button>
            </form>
            <ul class="contact__list">
            <!-- Lembrar de adicionar informações de contato aqui -->
            </ul>
        </section>
<?php
include_once('templates/footer.php');
?>