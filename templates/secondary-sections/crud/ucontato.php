<?php
    foreach($listacontact as $itemcontact){
        if($itemcontact['id'] == $_GET['see']){
            $mostrarContato = $itemcontact['texto'];
        }
    }
?>

<section>
    <form action="helpers/db_update.php?update=contato&see=<?=$_GET['see']?>" method="POST">
    <textarea name="texto" id="" cols="30" rows="10"><?=$mostrarContato?></textarea>
    <button type="submit">Editar</button>
    </form>
</section>