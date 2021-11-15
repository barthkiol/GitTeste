<?php

	
		session_start();

		include_once('config.php');
		

		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
		$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
		$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
		$estoque = mysqli_real_escape_string($conexao, $_POST['estoque']);
		$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
		
		//echo $id . $nome . $descricao . $valor . $estoque;
		$result_altProd = "UPDATE `produto` SET `descricao` = '$descricao', `valor` = '$valor', `nome` = '$nome', `estoque` = '$estoque' WHERE `produto`.`id` = $id ";
		$result_altProduto = mysqli_query($conexao, $result_altProd);

		header('Location: index.php');
		
	?>