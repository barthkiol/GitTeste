<?php


	include_once('Facade.php');
	include_once('config.php');
	
	//Facade::criarProduto("Produto Teste", "Descrição Teste", 10, 5);


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    
    <style>
		
		body{
			padding: 50px;
  			margin: auto;
		}
		
	</style>
	
<meta charset="utf-8">
<title>Trabalho</title>
</head>

<body>
	<div id="pagina">
	    
	    
	        <!-- Barra de atalhos lateral -->
	        
	    
	        <!-- conteudo da pagina -->
	        <div id="content-pagina">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-12">
	                       	<h1>Trabalho Facade</h1>
	                        <br>
	                        <br>	      
	                        <a href="novoproduto.php"><button type="button" class="btn btn-success"><img src="novo.png" alt="Image" height="20" width="20"/></button></a>           
		                    <br>
							<table class="table">
							  <thead class="thead-light">
							    <tr>
							      <th scope="col">Id</th>
							      <th scope="col">Nome</th>
							      <th scope="col">Estoque</th>
							      <th scope="col">Valor</th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      
							    </tr>
							    <?php
									Facade::listarProdutos();
								?>							    
							  </tbody>
							</table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    
	</div>
	
           

</body>

</html>