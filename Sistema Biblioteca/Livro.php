<?php
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual;

    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true;
        $this->leitorAtual = null;
    }

    // Métodos Get e Set
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }
    public function setAnoPublicacao($ano) {
        $this->anoPublicacao = $ano;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }
    public function setDisponivel($status) {
        $this->disponivel = $status;
    }

    // Método bônus
    public function exibirInformacoes() {
        echo "Título: {$this->titulo}\nAutor: {$this->autor}\nAno: {$this->anoPublicacao}\nDisponível: " . ($this->disponivel ? "Sim" : "Não") . "\n";
        if (!$this->disponivel && $this->leitorAtual) {
            echo "Emprestado para: {$this->leitorAtual}\n";
        }
        echo "-------------------------\n";
    }

    // Métodos de empréstimo
    public function emprestar($nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro '{$this->titulo}' emprestado para {$nomeLeitor}.\n";
        } else {
            echo "Livro '{$this->titulo}' já está emprestado.\n";
        }
    }

    public function devolver() {
        if (!$this->disponivel) {
            echo "Livro '{$this->titulo}' devolvido por {$this->leitorAtual}.\n";
            $this->disponivel = true;
            $this->leitorAtual = null;
        } else {
            echo "Livro '{$this->titulo}' já está disponível.\n";
        }
    }

    public function estaDisponivel() {
        return $this->disponivel ? "Livro disponível para empréstimo.\n" : "Livro emprestado.\n";
    }

    public function quemPegou() {
        return $this->leitorAtual ?? "Ninguém pegou este livro ainda.\n";
    }
}
