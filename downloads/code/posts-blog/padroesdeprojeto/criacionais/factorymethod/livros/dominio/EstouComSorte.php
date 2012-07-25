<?php

require_once "Livro.php";

class EstouComSorte extends Livro {
	//implementação da especialização
	public function __construct(){
		$titulo = "Estou com sorte";
		$autor = "Fulano da Silva";

		parent::__construct($titulo, $autor);
	}
}