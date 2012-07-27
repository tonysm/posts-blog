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

/**
*	output desse exemplo
*	
*	Escrevendo livro Costura
*	Encapando livro Costura
*	Publicando livro Costura
*	------------------
*	Escrevendo livro Culinaria
*	Encapando livro Culinaria
*	Publicando livro Culinaria
*	------------------
*	Escrevendo livro Disney
* 	Encapando livro Disney
*	Publicando livro Disney
*	------------------
*	Escrevendo livro Blender 3D
*	Encapando livro Blender 3D
*	Publicando livro Blender 3D
*	------------------
*	Escrevendo livro PHP OO
*	Encapando livro PHP OO
*	Publicando livro PHP OO
*	------------------
*	PhpOoLivro
*	Blender3dLivro
*	DisneyLivro
*
*/