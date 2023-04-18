<section class="adminabout">
    <p class="adminabout__title">Sobre mim</p>
    <table class="adminabout__table">
        <thead class="adminabout__table--thead">
            <th class="adminabout__table--thead_title">id</th>
            <th class="adminabout__table--thead_title">Paragrafo</th>
            <th class="adminabout__table--thead_title">Ver</th>
            <th class="adminabout__table--thead_title">Editar</th>
            <th class="adminabout__table--thead_title">Apagar</th>
        </thead>
        <?php foreach($listaabout as $itemabout):?>
        <tr class="adminabout__table--row">
            <?php
                $aboutpreview = substr($itemabout['paragrafo'],0,30);
            ?>
            <td class="adminabout__table--row_id adminabout__table--row_item"><?=$itemabout['id']?></td>
            <td class="adminabout__table--row_text adminabout__table--row_item"><?=$aboutpreview?></td>
            <td class="adminabout__table--row_see adminabout__table--row_item"><a href="admin.php?pag=rsobre-mim.php&see=<?=$itemabout['id']?>&type=2" class="adminabout__table--row_item-link"><i class="fa-regular fa-eye"></i></a></td>
            <td class="adminabout__table--row_edit adminabout__table--row_item"><a href="admin.php?pag=usobre-mim.php&see=<?=$itemabout['id']?>&type=2" class="adminabout__table--row_item-link"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td class="adminabout__table--row_delete adminabout__table--row_item"><a href="admin.php?pag=dsobre-mim.php&see=<?=$itemabout['id']?>&type=2" class="adminabout__table--row_item-link"><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <?php endforeach?>
    </table>
    <a href="admin.php?pag=csobre-mim.php&type=2" class="adminabout__button">Criar novo</a>
</section>