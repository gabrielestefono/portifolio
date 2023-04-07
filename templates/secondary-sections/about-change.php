<section  class="change">
    <p class="change__title"> Editar "Sobre mim"</p>
    <table class="change__title--table">
        <thead class="change__title--table_header">
            <th  class="change__title--table_header-item-1">ID</th>
            <th  class="change__title--table_header-item-2">Nome</th>
            <th  class="change__title--table_header-item-3">Ver</th>
            <th  class="change__title--table_header-item-4">Editar</th>
            <th  class="change__title--table_header-item-5">Apagar</th>
        </thead>
        <?php foreach($paragrafos as $paragrafo):?>
            <?php
                $vintelinhas = substr($paragrafo['paragrafo'], 0 , 30)    
            ?>
            <tr class="change__title--table_items">
                <td class="change__title--table_items-1"><?=$paragrafo['id']?></td>
                <td class="change__title--table_items-2"><?=$vintelinhas?></td>
                <td class="change__title--table_items-3"><a href="">&copy;</a></td>
                <td class="change__title--table_items-4"><a href="">&copy;</a></td>
                <td class="change__title--table_items-5"><a href="">&copy;</a></td>
            </tr>
        <?php endforeach;?>
    </table>
    <button class="change__button"> Crie um novo</button>
</section>