<?php

require_once "Editora.php";
require_once "dominio/Blender3dLivro.php";
require_once "dominio/PhpOoLivro.php";

/**
 * EditoraNovatec
 * 
 * Essa é uma classe Editora concreta.
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class EditoraNovatec extends Editora {
	/**
	 * createLivro
	 * 
	 * implementação do método createLivro. Recebe um tipo e retorna o objeto correspondente
	 * 
	 * @param String $tipo O tipo do livro solicitado
	 * @return Livro
	 */
	public function createLivro ( $tipo ){
		if($tipo == 'jogos')
			return new Blender3dLivro();

		if($tipo == 'php')
			return new PhpOoLivro();

		return null;
	}
}