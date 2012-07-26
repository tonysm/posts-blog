<?php

require_once "livros/EditoraAbril.php";
require_once "livros/EditoraNovatec.php";

// editora abril
$abril = new EditoraAbril();

// instanciando costura obj
$costura = $abril->publicar("costura");
// instanciando culinaria obj
$culinaria = $abril->publicar("culinaria");
// instanciando disney obj
$disney = $abril->publicar("disney");

// outra editora
$novatec = new EditoraNovatec();

// instanciando jogos obj
$jogos = $novatec->publicar("jogos");
// instanciando php obj
$php = $novatec->publicar("php");

// exibindo as classes dos objetos gerados
echo get_class($php) . "\n";
echo get_class($jogos) . "\n";
echo get_class($disney) . "\n";