<?php

require_once "Livro.php";

class DisneyLivro extends Livro {
	public function __construct(){
		$this->titulo = "Disney";
		$this->capa = true;
		$this->autor = "Fulano Mouse";
		$this->dataPublicacao = date('d/m/Y');
	}
}