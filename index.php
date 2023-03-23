<?php
include_once("./helper/url.php");
include_once("./templates/header.php");
?>
<section class="content">
    <div class="content__profile">
        <div class="content__profile--profile_picture">
            <img src="assets/img/perfil.png" alt="Foto ou ilustração da minha pessoa" class="content__profile--profile_picture">
        </div>
        <div class="content__profile--about">
            <h2 class="content__profile--about_name">Gabriel Estéfono</h2>
            <p class="content__profile--about_hability front">Front-end</p>
            <div class="content__profile--about_cards">
                <div class="smallcard__template"><img src="assets/img/js.png" alt="JavaScript" class="smallcard__template--image"></div>
                <div class="smallcard__template"><img src="assets/img/js.png" alt="JavaScript" class="smallcard__template--image"></div>
                <div class="smallcard__template"><img src="assets/img/js.png" alt="JavaScript" class="smallcard__template--image"></div>
            </div>
            <p class="content__profile--about_hability">Back-end</p>
            <div class="content__profile--about_cards">
                <div class="smallcard__template"><img src="assets/img/js.png" alt="JavaScript" class="smallcard__template--image"></div>
            </div>
            <p class="content__profile--about_hability">Outros conhecimentos</p>
            <div class="content__profile--about_cards">
                <div class="smallcard__template"><img src="assets/img/js.png" alt="JavaScript" class="smallcard__template--image"></div>
            </div>
        </div>
    </div>
    <div class="content__about">
        <div class="content__about--links">
            <a href="" class="content__about--links_link"><div class="about__me--link"><p class="about__me--link_title">Experiência</p></div></a>
            <a href="" class="content__about--links_link"><div class="about__me--link"><p class="about__me--link_title">Contato</p></div></a>
            <a href="" class="content__about--links_link"><div class="about__me--link"><p class="about__me--link_title">Sobre</p></div></a>
        </div>
    </div>
</section>

<?php
include_once("./templates/footer.php");
?>