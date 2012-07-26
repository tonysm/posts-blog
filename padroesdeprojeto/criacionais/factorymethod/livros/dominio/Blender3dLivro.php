<?php

require_once "Livro.php";

/**
 * Blender3dLivro
 * 
 * Classe concreta de livro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class Blender3dLivro extends Livro {
	/**
	 * __construct
	 * 
	 * método construtor
	 * 
	 * @return void
	 */
	public function __construct(){
		$this->titulo = "Blender 3D";
		$this->capa = true;
		$this->autor = "Desconhecido da silva";
		$this->dataPublicacao = date('d/m/Y');
	}
}