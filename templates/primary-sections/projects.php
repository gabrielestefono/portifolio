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