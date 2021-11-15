<?php
	
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'trab0806';

	$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

	/*if($conexao->connect_errno)
	{
		echo "erro";
	}
	else	
	{
		echo "Conectado";
	}*/
	
?>