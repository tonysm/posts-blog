<?php
require_once "Livro.php";

class VoltaDosQueNaoForam extends Livro {
	//implementação da especialização
	public function __construct(){
		$titulo = "A Volta dos que nao foram";
		$autor = "Fulano da Tal";

		parent::__construct($titulo, $autor);
	}
}