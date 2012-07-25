<?php

require_once "ILivroFactory.php";
require_once "dominio/VoltaDosQueNaoForam.php";
require_once "dominio/EstouComSorte.php";

class LivroFactory implements ILivroFactory {
	/**
	 * getLivro
	 * 
	 * retorna um objeto Livro
	 * 
	 * @param int $id ID do livro solicitado
	 * @return Livro
	 */
	public static function getLivro( $id ) {
		//simulando a busca por ID
		if($id === 1)
			return new VoltaDosQueNaoForam();

		return new EstouComSorte();
	}
}