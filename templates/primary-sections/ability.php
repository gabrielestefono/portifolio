        <section class="ability" id="habilidades">
            <h2 class="ability__title">Habilidades</h2>
            <div class="ability__categories">
                <div class="ability__categories--category">
                    <?php foreach($listaTipoHabilidade as $itemTipoHabilidade): ?>
                        <?php
                            foreach($listaHabilidade as $itemHabilidade){
                                if($itemHabilidade['tipo']  == $itemTipoHabilidade['tipo']){
                                    $habilidadeAdicionada = $itemHabilidade['nome'];
                                    $imagemhabilidade = $itemHabilidade['imagem'];
                                }
                            }
                        ?>
                    <div class="ability__categories--category_sep">
                        <h3 class="area"><?=$itemTipoHabilidade['tipo']?></h3>
                        <ul class="tech">
                            <li class="tech__card">
                                <img src="<?=$imagemhabilidade?>" alt="HTML5" class="tech__card--img">
                                <p class="tech__card--desc"><?=$habilidadeAdicionada?></p>
                            </li>
                        </ul>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>