<?php


	include_once('Facade.php');
	include_once('config.php');
	
	//Facade::criarProduto("Produto Teste", "Descrição Teste", 10, 5);

	$id_produto = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
							
	$id_cons = $id_produto;
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
	                       	<h1>Ver Produto</h1>
	                        <br>
	                        <br>
	                        <a href="index.php"><button type="button" class="btn btn-primary"><img src="voltar.png" alt="Image" height="20" width="20"/></button></a>	
	                        <br>
	                        <br>      
	                        <?php
								Facade::consultarProduto($id_cons);
							?>              
		                    <a href="delete.php?id=<?php echo $id_cons;?>"><button type="button" id="excluir" class="btn btn-danger"><img src="deletar.png" alt="Image" height="20" width="20"/></button></a>
				
							
	                    </div>
	                </div>
	            </div>
	        </div>
	    
	</div>
	<script>
     

    </script>
           

</body>

</html>