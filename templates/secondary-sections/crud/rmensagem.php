<?php foreach($listamensagens as $itemmensagem){
    if($itemmensagem['id'] == $_GET['see']){
        $MensagemNome = $itemmensagem['nome'];
        $MensagemEmail = $itemmensagem['email'];
        $MensagemAssunto = $itemmensagem['assunto'];
        $MensagemMensagem = $itemmensagem['mensagem'];
    }
}?>
<section>
    <p><?=$MensagemNome?></p>
    <p><?=$MensagemEmail?></p>
    <p><?=$MensagemAssunto?></p>
    <p><?=$MensagemMensagem?></p>
</section>