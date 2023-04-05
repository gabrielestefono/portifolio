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