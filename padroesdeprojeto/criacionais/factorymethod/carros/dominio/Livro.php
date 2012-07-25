<?php
/**
 * classe Livro
 * 
 * @author Luiz Messias <tonyzrp@gmail.com>
 */
abstract class Livro {
	/**
	 * @var String
	 */
	protected $_autor;
	/**
	 * @var String
	 */
	protected $_titulo;
	/**
	 * __construct
	 * 
	 * construtor da classe livro
	 * 
	 * @param string $titulo titulo do livro
	 * @param string $autor autor do livro
	 */
	public function __construct($titulo, $autor){
		$this->_autor = $autor;
		$this->_titulo = $titulo;
		echo "Título: " . $this->_titulo . "; autor: " . $this->_autor . "; Classe: " . get_class($this) . "\n";
	}
	/**
	 * getAutor
	 * 
	 * retorna o nome do autor
	 * 
	 * @return String
	 */
	public function getAutor(){
		return $this->_autor;
	}
	/**
	 * getTitulo
	 * 
	 * retorn o titulo do livro
	 * 
	 * @return String
	 */
	public function getTitulo(){
		return $this->_titulo;
	}
	/**
	 * setTitulo
	 * 
	 * altera o titulo do objeto
	 * 
	 * @param String $titulo novo titulo
	 * @return void
	 */
	public function setTitulo( String $titulo ){
		$this->_titulo = $titulo;
	}
	/**
	 * setAutor
	 * 
	 * altera o autor do objeto
	 * 
	 * @param String $autor novo autor
	 * @return void
	 */
	public function setAutor( String $autor){
		$this->_autor = $autor;
	}
}