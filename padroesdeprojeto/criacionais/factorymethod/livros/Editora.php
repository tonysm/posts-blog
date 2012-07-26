<?php

abstract class Editora {
	public function publicar( $tipo ){
		$livro = $this->createLivro( $tipo );

		$livro->escrever();
		$livro->encapar();
		$livro->publicar();

		return $livro;
	}

	public abstract function createLivro( $tipo );
}