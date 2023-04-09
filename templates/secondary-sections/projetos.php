<section class="adminprojects">
    <p class="adminprojects__title">Projetos</p>
    <table class="adminprojects__table">
        <thead class="adminprojects__table--thead">
            <th class="adminprojects__table--thead_title">id</th>
            <th class="adminprojects__table--thead_title">Nome</th>
            <th class="adminprojects__table--thead_title">Ver</th>
            <th class="adminprojects__table--thead_title">Editar</th>
            <th class="adminprojects__table--thead_title">Apagar</th>
        </thead>
        <?php foreach($listaprojetos as $itemprojetos):?>
        <tr class="adminprojects__table--row">
            <td class="adminprojects__table--row_id adminprojects__table--row_item"><?=$itemprojetos['id']?></td>
            <td class="adminprojects__table--row_text adminprojects__table--row_item"><?=$itemprojetos['nome']?></td>
            <td class="adminprojects__table--row_see adminprojects__table--row_item"><a href="admin.php?pag=rprojetos.php&see=<?=$itemprojetos['id']?>&type=2" class="adminprojects__table--row_item-link"><i class="fa-regular fa-eye"></i></a></td>
            <td class="adminprojects__table--row_edit adminprojects__table--row_item"><a href="admin.php?pag=uprojetos.php&see=<?=$itemprojetos['id']?>&type=2" class="adminprojects__table--row_item-link"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td class="adminprojects__table--row_delete adminprojects__table--row_item"><a href="admin.php?pag=dprojetos.php&see=<?=$itemprojetos['id']?>&type=2" class="adminprojects__table--row_item-link"><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="admin.php?pag=cprojetos.php&type=2" class="adminprojects__button">Criar novo</a>
</section>