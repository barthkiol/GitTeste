<?php

	declare(strict_types=1);
	include_once('config.php');
	

	class Produto{
		
		public $id;
		public $nome;
		public $descricao;
		public $valor;
		public $estoque;
	
		public static function criarProduto($nome, $descricao, $valor, $estoque){
			//echo "Produto criado, nome: " . $nome . ", descrição: " . $descricao . ", valor: " . $valor . ", estoque: " . $estoque;
			$dbHost = 'localhost';
			$dbUsername = 'root';
			$dbPassword = '';
			$dbName = 'trab0806';

			$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
			$result_produtoIns = "INSERT INTO `produto` (`nome`, `descricao`, `estoque`, `valor`) VALUES ('$nome', '$descricao', '$estoque', '$valor')";			
			$resultado_produtoIns = mysqli_query($conexao, $result_produtoIns);
			header('Location: index.php');
			
		}
		
		public static function alterarProduto($id, $nome, $descricao, $valor, $estoque){
			echo "Produto alterado, ID: " . $id . " nome: " . $nome . ", descrição: " . $descricao . ", valor: " . $valor . ", estoque: " . $estoque;
		}
		
		public static function excluirProduto($id){
			//echo "Produto excluido, id: " . $id;
			$dbHost = 'localhost';
			$dbUsername = 'root';
			$dbPassword = '';
			$dbName = 'trab0806';

			$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
			$result_produtoDel = "DELETE FROM produto where id = $id";			
			$resultado_produtoDel = mysqli_query($conexao, $result_produtoDel);
		}
		
		public static function consultarProdutoPeloId($id){
			echo "Produto do Id: " . $id;
			$dbHost = 'localhost';
			$dbUsername = 'root';
			$dbPassword = '';
			$dbName = 'trab0806';

			$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
			$result_produto = "SELECT * FROM produto where id = $id";			
			$resultado_produto = mysqli_query($conexao, $result_produto);
			$row_produto = mysqli_fetch_row($resultado_produto);
			?><br /><?php
			echo "Nome do produto: " . $row_produto[1];
			?><br /><?php
			echo "\nDescrição do produto: " . $row_produto[2];
			?><br /><?php
			echo "\nEstoque do produto: " . $row_produto[3];
			?><br /><?php
			echo "\nValor do produto: " . $row_produto[4];
			?><br /><?php
		}
		
		public static function conecta(){
			
			return $conexao;
		}

		public static function listaProdutos(){
			$dbHost = 'localhost';
			$dbUsername = 'root';
			$dbPassword = '';
			$dbName = 'trab0806';

			$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
			$result_produto = "SELECT * FROM produto";			
			$resultado_produto = mysqli_query($conexao, $result_produto);

			//verificar se encontrou algo
			if(($resultado_produto) and ($resultado_produto->num_rows !=0)){
				while($row_produto = mysqli_fetch_row($resultado_produto)){
				?>
				<tr>
					<td><?php echo $row_produto[0]; ?></td>
					<td><?php echo $row_produto[1]; ?></td>
					<td><?php echo $row_produto[3]; ?></td>
					<td><?php echo $row_produto[4]; ?></td>
					<td><a href="viewProduct.php?id=<?php echo $row_produto[0]; ?>"><button type="button" class="btn btn-primary"><img src="ver.png" alt="Image" height="20" width="20"/></button></a></td>
					<td><a href="editproduto.php?id=<?php echo $row_produto[0]; ?>"><button type="button" class="btn btn-warning"><img src="editar.png" alt="Image" height="20" width="20"/></button></a></td>
				</tr>
				<?php
				}
				
			}
		}
	}