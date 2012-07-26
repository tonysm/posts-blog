<?php

/**
 * Editora
 * 
 * essa classe servirá como uma inteface, suas subclasses terão a implementação do método abstrato createLivro.
 * 
 * @author Luiz Messias <tonyzrp@gmail.com
 */
abstract class Editora {
	/**
	 * publicar
	 * 
	 * esse método recebe como parâmetro o tipo de livro que deseja publicar, tornando o objeto
	 * do livro desejado ou null, caso não encontre-o.
	 * 
	 * @param String $tipo o tipo do livro desejado
	 * @return Livro
	 */
	public function publicar( $tipo ){
		$livro = $this->createLivro( $tipo );

		$livro->escrever();
		$livro->encapar();
		$livro->publicar();

		return $livro;
	}

	/**
	 * createLivro
	 * 
	 * esse método deve ser implementado pelas Editoras concretas
	 * 
	 * @param String $tipo
	 * @return Livro
	 */
	public abstract function createLivro( $tipo );
}