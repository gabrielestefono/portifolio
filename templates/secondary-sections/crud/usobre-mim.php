<?php
    foreach($paragrafos as $paragrafo){
        if($paragrafo['id'] == $_GET['see']){
            $paragrafoselecionado = $paragrafo['paragrafo'];
        }
    }
?>

<section class="uabout">
    <form action="admin.php?edit=<?=$_GET['see']?>" class="uabout__form" method="POST">
        <textarea name="editarparagrafo" cols="30" rows="10" class="uabout__form--text" placeholder="Digite um novo parágrafo"><?=$paragrafoselecionado?></textarea>
        <button type="submit" class="uabout__form--create">Editar</button>
    </form>
</section>