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


$host = "localhost";
$db = "portfolio";
$user = "gabriel";
$password = "teste123";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = '';
    $imagem = 'assets/img/' . $_POST['imagem'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $tech1 = $_POST['tech1'];
    $tech2 = $_POST['tech2'];
    $tech3 = $_POST['tech3'];
    $link = $_POST['link'];
    $novoObjeto = new Projeto($imagem, $nome, $descricao, $tech1, $tech2, $tech3, $link);
    $objeto = json_encode($novoObjeto);
    echo $objeto;
    $query = "INSERT INTO `projetos`(`id`, `nome`, `objeto`) VALUES ('$id', '$nome' ,'$objeto')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    header('location: ../edit.php');
}

$conn = null;

?>