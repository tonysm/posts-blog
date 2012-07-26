<?php
abstract class Livro {
	protected $titulo;
	protected $capa;
	protected $autor;
	protected $dataPublicacao;

	public function escrever(){
		echo "Escrevendo livro " . $this->titulo . "\n";
	}
	public function encapar() {
		echo "Encapando livro " . $this->titulo . "\n";
	}
	public function publicar() {
		echo "Publicando livro " . $this->titulo . "\n";
		echo "------------------\n";
	}
}