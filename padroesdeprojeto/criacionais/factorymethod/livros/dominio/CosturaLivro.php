<?php

require_once "Livro.php";

class CosturaLivro extends Livro {
	public function __construct(){
		$this->titulo = "Costura";
		$this->capa = true;
		$this->autor = "Fulana da Costura";
		$this->dataPublicacao = date('d/m/Y');
	}
}