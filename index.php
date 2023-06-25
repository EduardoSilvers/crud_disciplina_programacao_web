<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Clientes</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		try {
			// conexão com o banco
			$usuario = "aromas.php";
			$senha = "php2023*";
			$pdo = new PDO(
				"mysql:host=localhost;dbname=cliente",
				$usuario,
				$senha
			);

			// criar uma consulta ao banco
			$alunos = $pdo->query(
				"SELECT * FROM `aromas_lavanderia`;"
			)->fetchAll();

			// percorre o array/vetor de clientes
			// exibe na página o id e nome
			// foreach($clientes as $cliente){
			// 	echo($cliente["id"] . "<br>");	
			// 	echo($cliente["nome"] . "<br>");	
			// }
		} catch (Exception $e) {
			echo($e);
		}
		
	?>

	<h5>Clientes</h5>

	<a href="create.php">Criar um novo cliente</a>

	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>cod</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($clientes as $cliente): ?>
				<tr>
					<td><?php echo($cliente["id"]) ?></td>
					<td><?php echo($cliente["nome"]) ?></td>
					<td><?php echo($cliente["ra"]) ?></td>
					<td>
					<a href="edit.php?cliente_id=<?php echo($cliente["id"]); ?>">
						Editar
					</a>
					<a href="remove.php?cliente_id=<?php echo($cliente["id"]); ?>">
						Remover
					</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>