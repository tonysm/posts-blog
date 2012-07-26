<?php
require_once "Editora.php";
require_once "dominio/DisneyLivro.php";
require_once "dominio/CosturaLivro.php";
require_once "dominio/CulinariaLivro.php";

class EditoraAbril extends Editora {
	public function createLivro( $tipo ){
		if($tipo == 'disney')
			return new DisneyLivro();

		if($tipo == 'costura')
			return new CosturaLivro();

		return new CulinariaLivro();
	}
}