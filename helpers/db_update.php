<?php
class Projeto{
    public $imagem;
    public $nome;
    public $descricao;
    public $tech1;
    public $tech2;
    public $tech3;
    public $link;
    public function __construct($imagem, $nome, $descricao, $tech1, $tech2, $tech3, $link){
        $this->imagem = $imagem;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->tech1 = $tech1;
        $this->tech2 = $tech2;
        $this->tech3 = $tech3;
        $this->link = $link;
    }
}

$id = $_GET['see'];
$host = "localhost";
$db = "portfolio";
$user = "gabriel";
$password = "teste123";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

if($_GET['update'] == 'projetos'){
    $imagem = 'assets/img/' . $_POST['imagem'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $tech1 = $_POST['tech1'];
    $tech2 = $_POST['tech2'];
    $tech3 = $_POST['tech3'];
    $link = $_POST['link'];
    $novoObjeto = new Projeto($imagem, $nome, $descricao, $tech1, $tech2, $tech3, $link);
    $objeto = json_encode($novoObjeto);


    $stmt = $conn->prepare("UPDATE projetos SET id=:id,nome = :nome,objeto = :objeto WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':objeto', $objeto);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('location: ../admin.php');

}if($_GET['update'] == 'ability'){
    $stmt = $conn->prepare("UPDATE habilidades SET nome=:nome,imagem=:imagem,tipo=:tipo WHERE id=:id ");
    $id = $_GET['see'];
    $nome = $_POST['nome'];
    $imagem = 'assets/img/' . $_POST['imagem'];
    $tipo = $_POST['tipo'];
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':imagem', $imagem);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->execute();
    $stmt = null;
    header('location: ../admin.php?pag=habilidade.php&type=1');
}if($_GET['update'] == 'tipo'){
    $id = $_GET['see'];
    $tipo = $_POST['tipo'];
    $stmt = $conn->prepare("UPDATE tipo_habilidade SET tipo=:tipo WHERE id=:id ");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->execute();
    $stmt = null;
    header('location: ../admin.php?pag=habilidade.php&type=1');
}if($_GET['update'] == 'contato'){
    $id = $_GET['see'];
    $texto = $_POST['texto'];
    $stmt = $conn->prepare("UPDATE contact SET texto=:texto WHERE id=:id ");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':texto', $texto);
    $stmt->execute();
    $stmt = null;
    header('location: ../admin.php?pag=contato.php&type=1');
}
$stmt = null;
$conn = null;
?>

