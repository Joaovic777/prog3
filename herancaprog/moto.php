<?php

class Veiculo {
    public function andar() {
        echo "Andou";
    }
}

class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento";
    }
}

// Exemplo de uso:
$moto = new Moto();
$moto->andar();

?>