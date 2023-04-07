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
        <tr class="adminprojects__table--row">
            <td class="adminprojects__table--row_id adminprojects__table--row_item">1</td>
            <td class="adminprojects__table--row_text adminprojects__table--row_item">Alurabox</td>
            <td class="adminprojects__table--row_see adminprojects__table--row_item"><a href="admin.php?pag=crud/rprojetos.php" class="adminprojects__table--row_item-link"><i class="fa-regular fa-eye"></i></a></td>
            <td class="adminprojects__table--row_edit adminprojects__table--row_item"><a href="admin.php?pag=crud/uprojetos.php" class="adminprojects__table--row_item-link"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td class="adminprojects__table--row_delete adminprojects__table--row_item"><a href="admin.php?pag=crud/dprojetos.php" class="adminprojects__table--row_item-link"><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
    </table>
    <a href="admin.php?pag=crud/cprojetos.php" class="adminprojects__button">Criar novo</a>
</section>