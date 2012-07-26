<?php
require_once "Editora.php";
require_once "dominio/DisneyLivro.php";
require_once "dominio/CosturaLivro.php";
require_once "dominio/CulinariaLivro.php";

/**
 * EditoraAbril
 * 
 * essa é uma classe Editora concreta, com a implementação do createLivro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
class EditoraAbril extends Editora {
	/**
	 * createLivro
	 * 
	 * implementação do método createLivro. Recebe um tipo e, de acordo com o mesmo, retorna
	 * o objeto correspondente
	 * 
	 * @param String $tipo O tipo do livro
	 * @return Livro
	 */
	public function createLivro( $tipo ){
		if($tipo == 'disney')
			return new DisneyLivro();

		if($tipo == 'costura')
			return new CosturaLivro();

		if($tipo == 'culinaria')
			return new CulinariaLivro();

		return null;
	}
}