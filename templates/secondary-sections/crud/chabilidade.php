<section>
    <form action="helpers/db_create.php?criar=habilidade" method="POST">
        <input name="habilidade" type="text" placeholder="Nome da Habilidade">
        <input type="file" name="file">
        <select name="tipo">
            <?php foreach($listaTipoHabilidade as $itemTipoHabilidade):?>
            <option value="<?=$itemTipoHabilidade['tipo']?>"><?=$itemTipoHabilidade['tipo']?></option>
            <?php endforeach;?>
        </select>
        <button type="submit">Criar</button>
    </form>
</section>