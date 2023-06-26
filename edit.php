<!DOCTYPE html>
<html>
<head>
	<title>Editar cadastro do cliente</title>
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
		# validando se não existe a chave idcliente
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
		<h5 class="card-header">Editar dados do Cliente</h5>
			<div class="card-body">
				<form action="update.php" method="POST"> 
					<div class="row mb-2">
						<div class="col visually-hidden">					
							<input 
								type="hidden" 
								name="idcliente" 
								value="<?php echo($cliente['idcliente']) ?>">
						</div>
						<div class="col">
							Nome: <input 
								type="text" 
								name="nome" 
								value="<?php echo($cliente['nome']) ?>">
						</div>
						<div class="col">
							CPF: <input 
								type="text" 
								name="cpf"
								value="<?php echo($cliente['cpf']) ?>">
						</div>
						<div class="col">
							telefone: <input 
								type="text" 
								name="telefone"
								value="<?php echo($cliente['telefone']) ?>">
						</div>
						<div class="col">		
							Data de nascimento: <input 
							type="text" 
							name="data_nascimento"
							value="<?php echo($cliente['data_nascimento']) ?>">
						</div>
					</div>
					<div class="d-grid gap-2 row">
						<div class="col">
							<a class="btn btn-primary" href="index.php">Voltar</a>
						</div>	
						<div class="col">
							<button class="btn btn-success" type="submit">
								Atualizar
							</button>
						</div>					
					</div>
				</form>				
			</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>