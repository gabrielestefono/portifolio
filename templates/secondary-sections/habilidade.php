<section class="adminability">
<p class="adminability__title">Habilidades</p>
<p class="adminability__type">Tipo de Habilidade</p>
    <table class="adminability__table">
        <thead class="adminability__table--thead">
            <th class="adminability__table--thead_title">id</th>
            <th class="adminability__table--thead_title">Nome</th>
            <th class="adminability__table--thead_title">Ver</th>
            <th class="adminability__table--thead_title">Editar</th>
            <th class="adminability__table--thead_title">Apagar</th>
        </thead>
        <?php foreach($listaTipoHabilidade as $itemTipoHabilidade): ?>
            <tr class="adminability__table--row">
                <td class="adminability__table--row_id adminability__table--row_item"><?=$itemTipoHabilidade['id']?></td>
                <td class="adminability__table--row_text adminability__table--row_item"><?=$itemTipoHabilidade['tipo']?></td>
                <td class="adminability__table--row_see adminability__table--row_item"><i class="fa-regular fa-eye"></i></td>
                <td class="adminability__table--row_edit adminability__table--row_item"><i class="fa-regular fa-pen-to-square"></i></td>
                <td class="adminability__table--row_delete adminability__table--row_item"><i class="fa-regular fa-trash-can"></i></td>
            </tr>
        <?php endforeach;?>
    </table>
    <button class="adminability__button">Criar novo</button>
    <p class="adminability__type">Habilidade</p>
    <table class="adminability__table">
        <thead class="adminability__table--thead">
            <th class="adminability__table--thead_title">id</th>
            <th class="adminability__table--thead_title">Nome</th>
            <th class="adminability__table--thead_title">Ver</th>
            <th class="adminability__table--thead_title">Editar</th>
            <th class="adminability__table--thead_title">Apagar</th>
        </thead>
        <?php foreach($listaHabilidade as $itemHabilidade): ?>
            <tr class="adminability__table--row">
                <td class="adminability__table--row_id adminability__table--row_item"><?=$itemHabilidade['id']?></td>
                <td class="adminability__table--row_text adminability__table--row_item"><?=$itemHabilidade['nome']?></td>
                <td class="adminability__table--row_see adminability__table--row_item"><i class="fa-regular fa-eye"></i></td>
                <td class="adminability__table--row_edit adminability__table--row_item"><i class="fa-regular fa-pen-to-square"></i></td>
                <td class="adminability__table--row_delete adminability__table--row_item"><i class="fa-regular fa-trash-can"></i></td>
            </tr>
        <?php endforeach;?>
    </table>
    <button class="adminability__button">Criar novo</button>
</section>