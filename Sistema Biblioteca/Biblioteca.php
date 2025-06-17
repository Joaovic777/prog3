<?php
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nome) {
        $this->nomeBiblioteca = $nome;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "Lista de Livros da Biblioteca {$this->nomeBiblioteca}:\n";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        echo "Lista de Leitores da Biblioteca {$this->nomeBiblioteca}:\n";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}
