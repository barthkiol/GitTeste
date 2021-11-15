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
	                       	<h1>Novo Produto</h1>
	                        <br>
	                         <a href="index.php"><button type="button" class="btn btn-primary"><img src="voltar.png" alt="Image" height="20" width="20"/></button></a>
	                        <br>	      
	                       	<form action="Facade.php" method="POST" id="formulario"> 
	                       		<label for="form_nome">Nome:</label>
								<input type="text" class="form-control" id="form_sku" placeholder="Nome" name="nome" required>
								<br>
								<label for="form_des">Descrição:</label>
								<textarea class="form-control" id="form_des" placeholder="Descrição" rows="3" name="descricao" required></textarea>
								<br>
								<label for="form_estoque">Estoque:</label>
								<input type="number" class="form-control" id="form_estoque" name="estoque" required>
								<br>
								<label for="form_valor">Valor:</label>
								<input type="text" class="form-control" id="form_valor" name="valor" required>
								<br>
								<input class="btn btn-success" type="submit" value="Criar" id="enviar">
	                       	</form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    
	</div>
	
           

</body>

</html>