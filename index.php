<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Clientes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<?php
		try {
			// conexão com o banco
			$usuario = "root";
			$senha = "";
			$pdo = new PDO(
				"mysql:host=localhost;dbname=aromas",
				$usuario,
				$senha
			);

			// criar uma consulta ao banco
			$clientes = $pdo->query(
				"SELECT * FROM CLIENTE"
			)->fetchAll();

		} catch (Exception $e) {
			echo($e);
		}
		
	?>
	<div class="container text-center">
		<div class="row">
			<h5>Clientes</h5>
		</div>
		<div class="row">
			<div class="col"> 
				<a href="create.php" class="btn btn-primary">Criar um novo cliente</a>
			</div>
		</div>
		
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>nome</th>
						<th>cpf</th>
						<th>telefone</th>
						<th>data de  nascimento</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($clientes as $cliente): ?>
						<tr>
							<td><?php echo($cliente["idcliente"]) ?></td>
							<td><?php echo($cliente["nome"]) ?></td>
							<td><?php echo($cliente["cpf"]) ?></td>
							<td><?php echo($cliente["telefone"]) ?></td>
							<td><?php echo($cliente["data_nascimento"]) ?></td>
							<td>
								<div class="d-grid gap-2 d-md-block">
								
									<a class="btn btn-outline-success" href="edit.php?idcliente=<?php echo($cliente["idcliente"]); ?>">
										Editar
									</a>
								
									<a class="btn btn-outline-danger" href="remove.php?idcliente=<?php echo($cliente["idcliente"]); ?>">
										Remover
									</a>
									
								</div>	
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
