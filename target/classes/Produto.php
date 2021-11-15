<?php

	declare(strict_types=1);

	

	class Produto{
		
		public $id;
		public $nome;
		public $descricao;
		public $valor;
		public $estoque;
	
		public static function criarProduto($nome, $descricao, $valor, $estoque){
			echo "Produto criado, nome: " . $nome . ", descrição: " . $descricao . ", valor: " . $valor . ", estoque: " . $estoque;
		}
		
		public static function alterarProduto($nome, $descricao, $valor, $estoque){
			echo "Produto alterado, nome: " . $nome . ", descrição: " . $descricao . ", valor: " . $valor . ", estoque: " . $estoque;
		}
		
		public static function excluirProduto($id){
			echo "Produto excluido, id: " . $id;
		}
		
		public static function consultarProdutoPeloId($id){
			echo "Produto do Id: " . $id;
		}
	}