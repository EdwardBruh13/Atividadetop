<?php
class Livro { public $titulo; public $autor; public $paginas; }

$livro1 = new Livro();
$livro1->titulo = "Dom Casmurro";
$livro1->autor = "Machado de Assis";
$livro1->paginas = 256;

$livro2 = new Livro();
$livro2->titulo = "O Hobbit";
$livro2->autor = "J. R. R. Tolkien";
$livro2->paginas = 310;

echo $livro1->titulo . " - " . $livro1->autor . " - " . $livro1->paginas . " paginas\n";
echo $livro2->titulo . " - " . $livro2->autor . " - " . $livro2->paginas . " paginas\n";
