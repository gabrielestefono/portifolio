<section class="admincontact">
<p class="admincontact__title">Contato</p>
    <table class="admincontact__table">
        <thead class="admincontact__table--thead">
            <th class="admincontact__table--thead_title">id</th>
            <th class="admincontact__table--thead_title">Nome</th>
            <th class="admincontact__table--thead_title">Ver</th>
            <th class="admincontact__table--thead_title">Editar</th>
            <th class="admincontact__table--thead_title">Apagar</th>
        </thead>
        <?php foreach($listacontact as $itemcontact): ?>
            <?php
                $contactpreview = substr($itemcontact['texto'],0,30);
            ?>
        <tr class="admincontact__table--row">
            <td class="admincontact__table--row_id admincontact__table--row_item"><?=$itemcontact['id']?></td>
            <td class="admincontact__table--row_text admincontact__table--row_item"><?=$contactpreview?></td>
            <td class="admincontact__table--row_see admincontact__table--row_item"><a href="admin.php?pag=rcontato.php&type=2&see=<?=$itemcontact['id']?>"><i class="fa-regular fa-eye"></i></a></td>
            <td class="admincontact__table--row_edit admincontact__table--row_item"><a href="admin.php?pag=ucontato.php&type=2&see=<?=$itemcontact['id']?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td class="admincontact__table--row_delete admincontact__table--row_item"><a href="admin.php?pag=dcontato.php&type=2&see=<?=$itemcontact['id']?>"><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <?php endforeach;?>
    </table>
    <a  href="admin.php?pag=ccontato.php&type=2&see=<?=$itemcontact['id']?>" class="admincontact__button">Criar novo</a>
</section>