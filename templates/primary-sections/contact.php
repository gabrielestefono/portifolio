        <section class="contact" id="contato">
            <h2 class="contact__title">Contato</h2>
            <?php foreach($listacontact as $itemcontact): ?>
            <p class="contact__text"><?=$itemcontact['texto']?></p>
            <?php endforeach;?>
            <form class="contact__form" method="POST" action="save_db.php">
                <input name="nome" type="text" placeholder="Nome" class="contact__form--input" required>
                <input name="email" type="email" placeholder="E-mail" class="contact__form--input" required>
                <input name="assunto" type="text" placeholder="Assunto" class="contact__form--input" required>
                <textarea name="mensagem" placeholder="Mensagem" class="contact__form--textarea" required></textarea>
                <button class="contact__form--button" type="submit">Enviar mensagem</button>
            </form>
            <ul class="contact__list">
            <!-- Lembrar de adicionar informações de contato aqui -->
            </ul>
        </section>