<?php

require_once "Livro.php";
/**
 * CulinariaLivro
 * 
 * classe concreta de Livro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class CulinariaLivro extends Livro {
	/**
	 * __construct
	 * 
	 * método construtor
	 * 
	 * @return void
	 */
	public function __construct(){
		$this->titulo = "Culinaria";
		$this->capa = true;
		$this->autor = "Fulana Maria Brega";
		$this->dataPublicacao = date('d/m/Y');
	}
}