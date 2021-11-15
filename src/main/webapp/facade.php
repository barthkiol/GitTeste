<?php
	
	declare(strict_types=1);
	include_once('Produto.php');
	include_once('config.php');
	class Facade{
		
		public static function criarProduto($nome, $descricao, $valor, $estoque){
			Produto::criarProduto($nome, $descricao, $valor, $estoque);
		}
		
		public static function listarProdutos(){
			Produto::listaProdutos();
		}
		
		public static function consultarProduto($id){
			Produto::consultarProdutoPeloId($id);
		}

		public static function excluirProduto($id){
			Produto::excluirProduto($id);
		}
		public static function alterarProduto($id, $nome, $descricao, $valor, $estoque){
			Produto::alterarProduto($id, $nome, $descricao, $valor, $estoque);
		}

        

	}
	if($_SERVER['REQUEST_METHOD']=='POST')
        {
			$dbHost = 'localhost';
			$dbUsername = 'root';
			$dbPassword = '';
			$dbName = 'trab0806';

			$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

			$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
			$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
			$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
			$estoque = mysqli_real_escape_string($conexao, $_POST['estoque']);
            Produto::criarProduto($nome, $descricao, $valor, $estoque);
        } 
		

	