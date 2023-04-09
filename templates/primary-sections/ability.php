        <section class="ability" id="habilidades">
            <h2 class="ability__title">Habilidades</h2>
            <div class="ability__categories">
                <div class="ability__categories--category">
                    <?php foreach($listaTipoHabilidade as $itemTipoHabilidade): ?>
                    <div class="ability__categories--category_sep">
                        <h3 class="area"><?=$itemTipoHabilidade['tipo']?></h3>
                        <ul class="tech">
                            <?php foreach($listaHabilidade as $itemHabilidade):?>
                                <?php if($itemHabilidade['tipo'] == $itemTipoHabilidade['tipo']):?>
                                    <li class="tech__card">
                                        <img src="<?=$itemHabilidade['imagem']?>" alt="<?=$itemHabilidade['nome']?>" class="tech__card--img">
                                        <p class="tech__card--desc"><?=$itemHabilidade['nome']?></p>
                                    </li>
                                <?php endif;?>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>