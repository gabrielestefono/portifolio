<?php
    foreach($listaabout as $itemabout){
        if($itemabout['id'] == $_GET['see']){
            $paragrafoselecionado = $itemabout['paragrafo'];
        }
    }
?>

<section class="rabout">
    <p class="rabout__text"><?=$paragrafoselecionado?></p>
</section>