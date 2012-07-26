<?php

require_once "Livro.php";
/**
 * PhpOoLivro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class PhpOoLivro extends Livro {
	/**
	 * __construct
	 * 
	 * @return void
	 */
	public function __construct(){
		$this->titulo = "PHP OO";
		$this->capa = true;
		$this->autor = "Fulano de Tal da Silva";
		$this->dataPublicacao = date('d/m/Y');
	}
}