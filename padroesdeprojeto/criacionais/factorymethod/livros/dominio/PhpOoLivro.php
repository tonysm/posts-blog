<?php

require_once "Livro.php";

class PhpOoLivro extends Livro {
	public function __construct(){
		$this->titulo = "PHP OO";
		$this->capa = true;
		$this->autor = "Fulano de Tal da Silva";
		$this->dataPublicacao = date('d/m/Y');
	}
}