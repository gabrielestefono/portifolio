        <section class="about" id="sobre-mim">
            <h2 class="about__title">Sobre mim</h2>
            <div class="about__content">
                <img src="assets/img/foto.png" alt="Foto do desenvolvedor" class="about__content--profile"> 
                <div class="about__content--box">
                    <?php foreach($paragrafos as $paragrafo):?>
                        <p class="about__content--presents"><?=$paragrafo['paragrafo']?></p>
                    <?php endforeach;?>
                </div>
                <a href="curriculo.pdf" class="about__content--cv" download>Baixar currículo</a>
            </div>
        </section>