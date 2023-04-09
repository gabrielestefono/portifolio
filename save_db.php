<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $host = "localhost";
    $db = "portfolio";
    $user = "gabriel";
    $password = "teste123";
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $id = '';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $lida = '0';
    $stmt = $conn->prepare("INSERT INTO mensagens(id, nome, email, assunto, mensagem, lida) VALUES (:id,:nome,:email,:assunto,:mensagem,:lida)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':assunto', $assunto);
    $stmt->bindParam(':mensagem', $mensagem);
    $stmt->bindParam(':lida', $lida);
    $stmt->execute();
    $stmt=null;
    $conn=null;
    header('location: index.php#contato');
}
?>
