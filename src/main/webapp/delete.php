<?php

	
		session_start();

		include_once('config.php');
		

		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

		

		$result_delProd = "DELETE FROM `produto` WHERE `produto`.`id` = $id ";
		$result_delProduto = mysqli_query($conexao, $result_delProd);

		header('Location: index.php');
		
	?>