<?php
	
	declare(strict_types=1);
	


	
	use classes/Produto;	

	class Facade{
		
		public static function criarProduto($nome, $descricao, $valor, $estoque){
			Produto::criarProduto($nome, $descricao, $valor, $estoque)
		}
	}