<?php
include_once("./helper/url.php");
include_once("./templates/header.php");
?>
<section class="content">
    <div class="content__profile">
        <div class="content__profile--profile_picture">
            <img src="assets/img/perfil.png" alt="Foto ou ilustração da minha pessoa" class="content__profile--profile_picture" title="Foto ou ilustração da minha pessoa">
        </div>
        <div class="content__profile--about">
            <h2 class="content__profile--about_name">Gabriel Estéfono</h2>
            <p class="content__profile--about_hability front">Front-end</p>
            <div class="content__profile--about_cards">
                <div class="smallcard__template"><img src="assets/img/js.png" alt="Habilidade com JavaScript" class="smallcard__template--image" title="Habilidade com JavaScript"></div>
            </div>
            <p class="content__profile--about_hability">Back-end</p>
            <div class="content__profile--about_cards">
                <div class="smallcard__template"><img src="assets/img/js.png" alt="Habilidade com JavaScript" class="smallcard__template--image" title="Habilidade com JavaScript"></div>
            </div>
            <p class="content__profile--about_hability">Outros conhecimentos</p>
            <div class="content__profile--about_cards">
                <div class="smallcard__template"><img src="assets/img/js.png" alt="Habilidade com JavaScript" class="smallcard__template--image" title="Habilidade com JavaScript"></div>
            </div>
        </div>
    </div>
    <div class="content__about">
        <div class="content__about--links">
            <a href="" class="content__about--links_link"><div class="about__me--link-1"><p class="about__me--link_title">Experiência</p></div></a>
            <a href="" class="content__about--links_link"><div class="about__me--link-2"><p class="about__me--link_title">Contato</p></div></a>
            <a href="" class="content__about--links_link"><div class="about__me--link-3"><p class="about__me--link_title">Sobre</p></div></a>
        </div>
        <div class="content__about--descriptions">
        <p class="content__about--descriptions--description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos molestias ab cupiditate officiis veritatis unde 
            vero neque adipisci nemo quasi id corrupti ullam dolorem beatae, odio sequi natus est exercitationem?
            Est consequatur odit voluptatum, optio quisquam culpa repellat adipisci fugiat explicabo omnis distinctio modi unde magni ex iste libero totam perferendis eius rerum 
            porro quos consectetur quas! Consequatur, sunt temporibus!</p>
    </div>
    </div>
</section>
<section class="showcards">
    <div class="showcards__navbar"></div>
    <div class="showcards__cards">
    <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name">Nome do repositório aqui</div>
            <div class="card__tech">
            <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
                <div class="card__tech--tech">
                    <img src="assets/img/js.png" alt="" class="card__tech--tech--img">
                </div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
        <div class="showcards__cards--card">
            <div class="card__picture"></div>
            <div class="card__name"></div>
            <div class="card__tech">
                <div class="card__tech--tech"></div>
            </div>
        </div>
    </div>
</section>
<section class="contact">
    <div  class="contact__title">
        <p class="contact__title--text">Contato</p>
    </div>
    <div class="contact__form">
        <form action="" class="contact__form--space">
            <div><input type="text" name="" id=""  class="contact__form--space_name contact__form--space_item"></div>
            <div><input type="email" name="" id=""  class="contact__form--space_email  contact__form--space_item"></div>
            <div><input type="tel" name="" id="" class="contact__form--space_phone  contact__form--space_item"></div>
            <div><textarea name="" id="" cols="30" rows="10"  class="contact__form--space_message"></textarea></div>
            <div><button type="submit"  class="contact__form--space_button  contact__form--space_item">Enviar</button></div>
        </form>
        <div class="contact__form--keyboard">
            <img src="assets/img/teclado.png" alt="" class="contact__form--keyboard_img">
        </div>
    </div>
</section>

<?php
include_once("./templates/footer.php");
?>