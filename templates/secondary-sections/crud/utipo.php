<?php foreach($listaTipoHabilidade as $itemTipoHabilidade){
    if($itemTipoHabilidade['id'] == $_GET['see']){
        $mostrarTipoHabilidade = $itemTipoHabilidade['tipo'];
    }
}
?>
<section>
    <form action="helpers/db_update.php?update=tipo&see=<?=$itemTipoHabilidade['id']?>" method="POST">
        <input type="text" name="tipo" value="<?=$mostrarTipoHabilidade?>">
        <button type="submit">Editar</button>
    </form>
</section>