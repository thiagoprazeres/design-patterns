<?php
// Classe protótipo
class MyClass {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // Implementação do método mágico __clone()
    public function __clone() {
        // Copia as propriedades do objeto original
        $this->id = 'Cópia de ' . $this->id;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}

// Cria um objeto protótipo
$obj1 = new MyClass(10, 'Produto A');

// Cria uma cópia do objeto protótipo
$copia1 = clone $obj1;
$copia2 = clone $obj1;

echo $copia1->getName() . ': ' . $copia1->getId() . PHP_EOL;
echo $copia2->getName() . ': ' . $copia2->getName() . PHP_EOL;
