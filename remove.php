<!DOCTYPE html>
<html>
<head>
	<title>Excluir cadastro de cliente</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<?php 
		// conexão com o banco
		$usuario = "root";
		$senha = "";
		$pdo = new PDO(
			"mysql:host=localhost;dbname=aromas",
			$usuario,
			$senha
		);

		# validando se não existe a chave aluno_id
		if(!isset($_GET['idcliente'])){
			echo("Cliente inexistente");
			exit();
		}

		$idcliente = $_GET['idcliente'];
		$cliente = $pdo->query(
			"SELECT * FROM cliente WHERE idcliente=$idcliente"
		)->fetch();
	?>
		<div class="card">		
				<h5 class="card-header">Tem certeza que deseja remover o cadastro?</h5>
					<div class="card-body">
							<form action="destroy.php" action="GET">
								<div class="row">
									<div class="col">
										<input 
										type="hidden" 
										name="idcliente" 
										value="<?php echo($cliente['idcliente']) ?>">
									</div>
									<div class="d-grid gap-2 row">
										<div class="col">
											<a class="btn btn-success" href="index.php">Não</a>
										</div>	
										<div class="col">
											<button class="btn btn-danger" type="submit">
												Sim
											</button>
										</div>					
									</div>
								</div>
							</form>
					</div>
		</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>