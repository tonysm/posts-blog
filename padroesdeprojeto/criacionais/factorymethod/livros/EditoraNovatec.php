<?php

require_once "Editora.php";
require_once "dominio/Blender3dLivro.php";
require_once "dominio/PhpOoLivro.php";

class EditoraNovatec extends Editora {
	public function createLivro ( $tipo ){
		if($tipo == 'jogos')
			return new Blender3dLivro();

		return new PhpOoLivro();
	}
}