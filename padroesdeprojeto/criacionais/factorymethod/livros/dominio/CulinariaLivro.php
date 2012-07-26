<?php

require_once "Livro.php";

class CulinariaLivro extends Livro {
	public function __construct(){
		$this->titulo = "Culinaria";
		$this->capa = true;
		$this->autor = "Fulana Maria Brega";
		$this->dataPublicacao = date('d/m/Y');
	}
}