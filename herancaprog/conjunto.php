<?php

class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function andar() {
        echo "Andou<br>";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel;

    public function __construct($marca, $modelo, $tipoCombustivel) {
        parent::__construct($marca, $modelo);
        $this->tipoCombustivel = $tipoCombustivel;
    }

    public function mostrarCombustivel() {
        echo "Tipo de combustível: {$this->tipoCombustivel}<br>";
    }
}

class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento<br>";
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!<br>";
    }
}

class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada<br>";
    }
}

$carro1 = new Carro("Toyota", "Corolla", "Gasolina");
$carro2 = new Carro("Volkswagen", "Golf", "Diesel");

$carro1->andar();
$carro1->mostrarCombustivel();

$carro2->mostrarCombustivel();

$moto1 = new Moto("Honda", "CG 160");
$moto2 = new Moto("Yamaha", "Factor 150");

$moto1->andar();
$moto2->andar();

$caminhao = new Caminhao("Mercedes", "Actros");
$caminhao->andar();
$caminhao->carregarCarga();

$carroEletrico = new CarroEletrico("Tesla", "Model 3", "Elétrico");
$carroEletrico->andar();
$carroEletrico->mostrarCombustivel();
$carroEletrico->carregarBateria();

?>