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
$imagem = 'assets/img/' . $_POST['imagem'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$tech1 = $_POST['tech1'];
$tech2 = $_POST['tech2'];
$tech3 = $_POST['tech3'];
$link = $_POST['link'];
$novoObjeto = new Projeto($imagem, $nome, $descricao, $tech1, $tech2, $tech3, $link);
$objeto = json_encode($novoObjeto);


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$stmt = $conn->prepare("UPDATE projetos SET id=:id,nome = :nome,objeto = :objeto WHERE id = :id");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':objeto', $objeto);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':id', $id);
$stmt->execute();
$stmt = null;
header('location: ../admin.php')
?>

