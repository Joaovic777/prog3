<?php
// Inclua os arquivos ou classes diretamente se estiver tudo no mesmo arquivo
require 'Leitor.php';
require 'Biblioteca.php';
require 'Livro.php';

// Criando objetos
$livro1 = new Livro("1984", "George Orwell", 1949);
$livro2 = new Livro("Dom Casmurro", "Machado de Assis", 1899);
$livro3 = new Livro("O Hobbit", "J.R.R. Tolkien", 1937);

$leitor1 = new Leitor("Maria Silva", "maria@email.com", "123456789");
$leitor2 = new Leitor("João Pereira", "joao@email.com", "987654321");

// Criando biblioteca
$biblioteca = new Biblioteca("Biblioteca Comunitária São Jorge");

// Adicionando livros e leitores
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

// Listando
$biblioteca->listarLivros();
$biblioteca->listarLeitores();

// Empréstimo
$livro1->emprestar($leitor1->getNome());
echo $livro1->estaDisponivel();
echo "Quem pegou: " . $livro1->quemPegou() . "\n";

// Devolução
$livro1->devolver();
echo $livro1->estaDisponivel();
