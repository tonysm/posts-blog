<?php

require_once "livros/EditoraAbril.php";
require_once "livros/EditoraNovatec.php";

// editora abril
$abril = new EditoraAbril();
$abril->publicar("costura");

$abril->publicar("culinaria");

$abril->publicar("disney");

// outra editora
$novatec = new EditoraNovatec();

$novatec->publicar("jogos");

$novatec->publicar("php");