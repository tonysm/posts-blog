<?php

require_once "carros/LivroFactory.php";

// simulamos a passagem de id
$volta = LivroFactory::getLivro(1);
// output: Título: A Volta dos que nao foram; autor: Fulano da Tal; Classe: VoltaDosQueNaoForam

$sorte = LivroFactory::getLivro(2);
// output: Título: Estou com sorte; autor: Fulano da Silva; Classe: EstouComSorte