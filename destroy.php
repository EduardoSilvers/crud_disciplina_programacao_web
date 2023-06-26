<!DOCTYPE html>
<html>
<head>
	<title>Editar cadastro do cliente</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>	
	<?php 
		// validação do tipo da requisição
		if($_SERVER['REQUEST_METHOD'] == 'GET'){

			// recuperar os dados da requisição
			$idcliente = '';

			// validando campo
			if(isset($_GET['idcliente'])){
				$idcliente = $_GET['idcliente'];
			}
			if(empty($idcliente)){
				echo("Cliente inválido");
				exit();
			}
			// conectando no banco de dados
			$usuario = "root";
			$senha = "";
			$pdo = new PDO(
				"mysql:host=localhost;dbname=aromas",
				$usuario,
				$senha
			);

			$removecliente = $pdo->prepare(
				"DELETE FROM cliente where idcliente=?"
			);

			$removecliente->execute([
				$idcliente
			]);


			echo "Cadastro removido com sucesso";
		}
	?>
	<div class="row">
		<div class="col mt-2">
			<a class="btn btn-primary" href="index.php">Home</a>
		</div>						
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>