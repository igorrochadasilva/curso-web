<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">

			  <div class="row" >
			  <h1>Detalhes d0 produtos</h1>
			  </div>
             
			  <div class="row">
			  <div class="col-md-4">
			  <?php
			  
			  $id_produto = $_POST['id_produto'];  // $_GET metodo

			
					$detalhes[1] = "Detalhe das cadeiras";
					$detalhes[2] = "Detalhes do fogão";
					$detalhes[3] = "Detalhes do roteador";
					$detalhes[4] = "Detalhes da tv";
					$detalhes[5] = "Eu sou de++++";

					echo $detalhes[$id_produto];
			   ?>
                   
			  </div>


			  </div>
		</div>
	</body>
</html>