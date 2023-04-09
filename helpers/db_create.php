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
    if(isset($_GET['criar'])){
        if($_GET['criar'] == 'projeto'){
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
            header('location: ../admin.php');
        }else if($_GET['criar'] == 'about'){
            $id = '';
            $textosalvo = $_POST['paragrafo'];
            $host = "localhost";
            $db = "portfolio";
            $user = "gabriel";
            $password = "teste123";
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $stmt = $conn->prepare("INSERT INTO about_me_paragraph (id, paragrafo) VALUES (:id ,:paragrafo)");
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':paragrafo', $textosalvo);
            $stmt->execute();
            header('location: ../admin.php?pag=sobre-mim.php&type=1');
        }else if($_GET['criar'] == 'habilidade'){
            $id = '';
            $novaHabilidade = $_POST['habilidade'];
            $novaHabilidadeImagem = "assets/img/" . $_POST['file'];
            $novaHabilidadeTipo = $_POST['tipo'];
            $host = "localhost";
            $db = "portfolio";
            $user = "gabriel";
            $password = "teste123";
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $stmt = $conn->prepare("INSERT INTO habilidades (id, nome, imagem, tipo) VALUES (:id ,:nome, :imagem, :tipo)");
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':nome', $novaHabilidade);
            $stmt->bindParam(':imagem', $novaHabilidadeImagem);
            $stmt->bindParam(':tipo', $novaHabilidadeTipo);
            $stmt->execute();
            header('location: ../admin.php?pag=habilidade.php&type=1');
        }else if($_GET['criar'] == 'tipo'){
            $id = '';
            $tipo = $_POST['tipo'];
            $host = "localhost";
            $db = "portfolio";
            $user = "gabriel";
            $password = "teste123";
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $stmt = $conn->prepare("INSERT INTO tipo_habilidade(id, tipo) VALUES (:id,:tipo)");
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->execute();
            header('location: ../admin.php?pag=habilidade.php&type=1');
        }else if($_GET['criar'] == 'contato'){
            $id = '';
            $texto = $_POST['texto'];
            $host = "localhost";
            $db = "portfolio";
            $user = "gabriel";
            $password = "teste123";
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $stmt = $conn->prepare("INSERT INTO contact(id, texto) VALUES (:id,:texto)");
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':texto', $texto);
            $stmt->execute();
            header('location: ../admin.php?pag=contato.php&type=1');
        }
    }
}

$conn = null;

?>