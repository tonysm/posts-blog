<?php

require_once "Livro.php";
/**
 * DisneyLivro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class DisneyLivro extends Livro {
	/**
	 * __construct
	 * 
	 * @return void
	 */
	public function __construct(){
		$this->titulo = "Disney";
		$this->capa = true;
		$this->autor = "Fulano Mouse";
		$this->dataPublicacao = date('d/m/Y');
	}
}