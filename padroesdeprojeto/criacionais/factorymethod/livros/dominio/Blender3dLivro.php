<?php

require_once "Livro.php";

class Blender3dLivro extends Livro {
	public function __construct(){
		$this->titulo = "Blender 3D";
		$this->capa = true;
		$this->autor = "Desconhecido da silva";
		$this->dataPublicacao = date('d/m/Y');
	}
}