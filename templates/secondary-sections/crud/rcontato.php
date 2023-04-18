<?php
    foreach($listacontact as $itemcontact){
        if($itemcontact['id'] == $_GET['see']){
            $mostrarContato = $itemcontact['texto'];
        }
    }
?>

<section>
    <p><?=$mostrarContato?></p>
</section>