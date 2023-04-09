<?php
    foreach($paragrafos as $paragrafo){
        if($paragrafo['id'] == $_GET['see']){
            $paragrafoselecionado = $paragrafo['paragrafo'];
        }
    }
?>

<section class="rabout">
    <p class="rabout__text"><?=$paragrafoselecionado?></p>
</section>