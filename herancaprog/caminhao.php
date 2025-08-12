<?php
class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInfo() {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}\n";
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!\n";
    }
}

// Exemplo de uso:
$caminhao = new Caminhao("Volvo", "FH");
$caminhao->exibirInfo();
$caminhao->carregarCarga();
?>
