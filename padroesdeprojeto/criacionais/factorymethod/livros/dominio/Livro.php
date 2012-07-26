<?php

/**
 * Livro
 * 
 * class abstrata de um livro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
abstract class Livro {
	/**
	 * @var String
	 */
	protected $titulo;
	/**
	 * @var boolean
	 */
	protected $capa;
	/**
	 * @var String
	 */
	protected $autor;
	/**
	 * @var String
	 */
	protected $dataPublicacao;
	/**
	 * escrever
	 * 
	 * implementação do método básico
	 * 
	 * @return void
	 */
	public function escrever(){
		echo "Escrevendo livro " . $this->titulo . "\n";
	}
	/**
	 * encapar
	 * 
	 * implementação do método encapar
	 * 
	 * @return void
	 */
	public function encapar() {
		echo "Encapando livro " . $this->titulo . "\n";
	}
	/**
	 * publicar
	 * 
	 * implementação do método publicar
	 * 
	 * @return void
	 */
	public function publicar() {
		echo "Publicando livro " . $this->titulo . "\n";
		echo "------------------\n";
	}
}