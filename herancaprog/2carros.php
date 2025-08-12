<?php

class Carro {
    public $marca;
    public $modelo;
    public $cor;

    public function buzinar() {
        echo "Carro {$this->modelo} buzinando: BEEP BEEP!<br>";
    }

    public function acelerar() {
        echo "Carro {$this->modelo} acelerando!<br>";
    }
}

class Moto {
    public $marca;
    public $cilindrada;
    public $cor;

    public function empinar() {
        echo "Moto {$this->marca} empinando!<br>";
    }

    public function acelerar() {
        echo "Moto {$this->marca} acelerando!<br>";
    }
}

// Instanciando dois carros
$carro1 = new Carro();
$carro1->marca = "Toyota";
$carro1->modelo = "Corolla";
$carro1->cor = "Prata";

$carro2 = new Carro();
$carro2->marca = "Honda";
$carro2->modelo = "Civic";
$carro2->cor = "Preto";

// Instanciando duas motos
$moto1 = new Moto();
$moto1->marca = "Yamaha";
$moto1->cilindrada = 250;
$moto1->cor = "Azul";

$moto2 = new Moto();
$moto2->marca = "Honda";
$moto2->cilindrada = 160;
$moto2->cor = "Vermelha";

// Chamando métodos distintos
$carro1->buzinar();
$carro2->acelerar();

$moto1->empinar();
$moto2->acelerar();

?>