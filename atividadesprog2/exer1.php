<?php

class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function addAumento($valor) {
        $this->salario += $valor;
    }

    public function ganhoAnual() {
        return $this->salario * 12;
    }

    public function exibeDados() {
        echo "Nome: $this->nome, Salário: R$ $this->salario\n";
    }
}

class Assistente extends Funcionario {
    private $matricula;

    public function __construct($nome, $salario, $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Matrícula: $this->matricula\n";
    }
}

class Tecnico extends Assistente {
    public function ganhoAnual() {
        return parent::ganhoAnual() + 1000;
    }
}

class Administrativo extends Assistente {
    private $turno;
    private $adicionalNoturno;

    public function __construct($nome, $salario, $matricula, $turno, $adicionalNoturno) {
        parent::__construct($nome, $salario, $matricula);
        $this->turno = $turno;
        $this->adicionalNoturno = $adicionalNoturno;
    }

    public function ganhoAnual() {
        return parent::ganhoAnual() + $this->adicionalNoturno;
    }
}

class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function imprimeValor() {
        echo "Valor do ingresso: R$ $this->valor\n";
    }
}

class VIP extends Ingresso {
    private $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function valorVIP() {
        return $this->valor + $this->valorAdicional;
    }
}

class Normal extends Ingresso {
    public function imprimeValor() {
        echo "Ingresso Normal: R$ $this->valor\n";
    }
}

class CamaroteInferior extends VIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function imprimeLocalizacao() {
        echo "Localização: $this->localizacao\n";
    }
}

class CamaroteSuperior extends VIP {
    public function valorVIP() {
        return parent::valorVIP() + 50;
    }
}

class Imovel {
    protected $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }
}

class Novo extends Imovel {
    private $adicional;

    public function __construct($endereco, $preco, $adicional) {
        parent::__construct($endereco, $preco);
        $this->adicional = $adicional;
    }

    public function valorFinal() {
        return $this->preco + $this->adicional;
    }
}

class Velho extends Imovel {
    private $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function valorFinal() {
        return $this->preco - $this->desconto;
    }
}

class Teste {
    public static function main() {
        $assistenteAdmin = new Administrativo("João", 3000, "12345", "dia", 500);
        $assistenteTecnico = new Tecnico("Maria", 2500, "54321");

        $assistenteAdmin->exibeDados();
        $assistenteTecnico->exibeDados();

        $cachorro = new class {
            public function latir() {
                echo "O cachorro latiu!\n";
            }
            public function caminhar() {
                echo "O cachorro está caminhando.\n";
            }
        };

        $gato = new class {
            public function miar() {
                echo "O gato miou!\n";
            }
            public function caminhar() {
                echo "O gato está caminhando.\n";
            }
        };

        $cachorro->latir();
        $gato->miar();
        $cachorro->caminhar();
        $gato->caminhar();

        $rica = new Rica();
        $pobre = new Pobre();
        $miseravel = new Miseravel();

        $rica->status();
        $pobre->status();
        $miseravel->status();

        $tipoIngresso = 2;
        if ($tipoIngresso == 1) {
            $ingresso = new Normal(50);
            $ingresso->imprimeValor();
        } else {
            $valorAdicional = 20;
            $ingressoVIP = new VIP(50, $valorAdicional);
            $tipoCamarote = 1;
            if ($tipoCamarote == 1) {
                $camaroteSuperior = new CamaroteSuperior(50, $valorAdicional);
                echo "Ingresso VIP Camarote Superior: R$ " . $camaroteSuperior->valorVIP() . "\n";
            } else {
                $localizacao = "Camarote Inferior";
                $camaroteInferior = new CamaroteInferior(50, $valorAdicional, $localizacao);
                $camaroteInferior->imprimeLocalizacao();
                echo "Ingresso VIP Camarote Inferior: R$ " . $camaroteInferior->valorVIP() . "\n";
            }
        }

        $tipoImovel = 1;
        if ($tipoImovel == 1) {
            $imovelNovo = new Novo("Rua A", 200000, 30000);
            echo "Valor final do imóvel novo: R$ " . $imovelNovo->valorFinal() . "\n";
        } else {
            $imovelVelho = new Velho("Rua B", 150000, 20000);
            echo "Valor final do imóvel velho: R$ " . $imovelVelho->valorFinal() . "\n";
        }
    }
}

class Rica {
    public function status() {
        echo "Classe Rica\n";
    }
}

class Pobre {
    public function status() {
        echo "Classe Pobre\n";
    }
}

class Miseravel {
    public function status() {
        echo "Classe Miserável\n";
    }
}

Teste::main();

?>
