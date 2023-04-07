<?php 
    $paginas = 0;
?>
<section>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <?php foreach($resultado as $valor):?>
            <tr>
                <td><?=$valor['id']?></td>
                <td><?=$valor['nome']?></td>
                <td><a href="">&copy;</a></td>
                <td><a href="">&copy;</a></td>
            </tr>
        <?php endforeach;?>
            <tr>
                <td colspan="4"><a href="">Crie um novo</a></td>
            </tr>
    </table>
    <div>
        <?php foreach($resultado as $valor):?>
            <?php if($valor['id'] % 20 == 0):?>
                <div><a href=""><?=++$paginas?></a></div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
</section>