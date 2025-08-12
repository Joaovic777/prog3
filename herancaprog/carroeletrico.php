<?php

// Classe base Carro
class Carro {
    public function ligar() {
        echo "Carro ligado<br>";
    }

    public function desligar() {
        echo "Carro desligado<br>";
    }

    public function acelerar() {
        echo "Carro acelerando<br>";
    }
}

// Classe derivada CarroEletrico
class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada<br>";
    }
}

// Testando a classe CarroEletrico
$meuCarro = new CarroEletrico();
$meuCarro->ligar();
$meuCarro->acelerar();
$meuCarro->desligar();
$meuCarro->carregarBateria();

?>