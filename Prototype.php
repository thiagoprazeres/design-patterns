// Classe protótipo
class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Implementação do método mágico __clone()
    public function __clone() {
        // Copia as propriedades do objeto original
        $this->nome = 'Cópia de ' . $this->nome;
        $this->preco = $this->preco * 2;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Cria um objeto protótipo
$prototipo = new Produto('Produto A', 10);

// Cria uma cópia do objeto protótipo
$copia1 = clone $prototipo;
$copia2 = clone $prototipo;

echo $copia1->getNome() . ': ' . $copia1->getPreco() . PHP_EOL;
echo $copia2->getNome() . ': ' . $copia2->getPreco() . PHP_EOL;
