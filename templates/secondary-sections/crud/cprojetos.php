<section class="cprojetos">
    <form action="helpers/db_create.php?criar=projeto" class="cprojetos__form" method="POST">
        <input type="file"  name="imagem" class="cprojetos__form--file">
        <input type="text"  name="nome" placeholder="Nome" class="cprojetos__form--input">
        <input type="text"  name="descricao" placeholder="Descrição" class="cprojetos__form--input">
        <input type="text"  name="tech1" placeholder="Tecnologia 01" class="cprojetos__form--input">
        <input type="text"  name="tech2" placeholder="Tecnologia 02" class="cprojetos__form--input">
        <input type="text"  name="tech3" placeholder="Tecnologia 03" class="cprojetos__form--input">
        <input type="text"  name="link" placeholder="Link do Deploy" class="cprojetos__form--input">
        <input type="submit" value="Criar"  class="cprojetos__form--button">
    </form>
</section>