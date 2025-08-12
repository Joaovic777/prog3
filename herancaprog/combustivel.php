<?php

class Carro {
    private $tipoCombustivel;

    public function __construct($tipoCombustivel) {
        $this->tipoCombustivel = $tipoCombustivel;
    }

    public function mostrarCombustivel() {
        echo "Tipo de combustível: " . $this->tipoCombustivel;
    }
}

// Exemplo de uso:
$carro = new Carro("Gasolina");
$carro->mostrarCombustivel();

?>