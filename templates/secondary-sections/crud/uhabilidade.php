<?php foreach($listaHabilidade as $itemHabilidade){
    if($itemHabilidade['id'] == $_GET['see']){
        $mostrarHabilidade = $itemHabilidade['nome'];
    }
}
?>
<section>
    <form action="helpers/db_update.php?update=ability&see=<?=$itemHabilidade['id']?>" method="POST">
        <input type="text" name="nome" value="<?=$mostrarHabilidade?>">
        <input type="file" name="imagem">
        <select name="tipo">
        <?php foreach($listaTipoHabilidade as $itemTipoHabilidade):?>
                <option value="<?=$itemTipoHabilidade['tipo']?>"><?=$itemTipoHabilidade['tipo']?></option>
            <?php endforeach;?>
        </select>
        <button type="submit">Editar</button>
    </form>
</section>