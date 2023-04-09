<section class="admincontact">
<p class="admincontact__title">Mensagens</p>
    <table class="admincontact__table">
        <thead class="admincontact__table--thead">
            <th class="admincontact__table--thead_title">id</th>
            <th class="admincontact__table--thead_title">Nome</th>
            <th class="admincontact__table--thead_title">Ver</th>
            <th class="admincontact__table--thead_title">Apagar</th>
        </thead>
        <?php foreach($listamensagens as $itemmensagem):?>
        <tr class="admincontact__table--row">
            <td class="admincontact__table--row_id admincontact__table--row_item"><?=$itemmensagem['id']?></td>
            <td class="admincontact__table--row_text admincontact__table--row_item"><?=$itemmensagem['nome']?></td>
            <td class="admincontact__table--row_see admincontact__table--row_item"><a href="admin.php?pag=rmensagem.php&type=2&see=<?=$itemmensagem['id']?>"><i class="fa-regular fa-eye"></i></a></td>
            <td class="admincontact__table--row_delete admincontact__table--row_item"><a href="admin.php?pag=dmensagem.php&type=2&see=<?=$itemmensagem['id']?>"><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <?php endforeach;?>
    </table>
</section>