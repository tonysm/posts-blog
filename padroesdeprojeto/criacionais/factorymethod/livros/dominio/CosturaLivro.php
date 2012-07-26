<?php

require_once "Livro.php";
/**
 * CosturaLivro
 * 
 * Classe concreta de Livro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class CosturaLivro extends Livro {
	/**
	 * __construct
	 * 
	 * método construtor
	 * 
	 * @return void
	 */
	public function __construct(){
		$this->titulo = "Costura";
		$this->capa = true;
		$this->autor = "Fulana da Costura";
		$this->dataPublicacao = date('d/m/Y');
	}
}