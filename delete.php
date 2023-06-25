<!DOCTYPE html>
<html>
<head>
	<title>Removendo cliente</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		// conexão com o banco
		$usuario = "aromas.php";
		$senha = "php2023*";
		$pdo = new PDO(
			"mysql:host=localhost;dbname=cliente",
			$usuario,
			$senha
		);

		# validando se não existe a chave cliente_id
		if(!isset($_GET['cliente_id'])){
			echo("Cliente invalido...");
			exit();
		}

		$cliente_id = $_GET['cliente_id'];
		$cliente = $pdo->query(
			"SELECT * FROM `aromas_lavanderia` WHERE id=$cliente_id"
		)->fetch();
	?>
	<p>Tem certeza que deseja remover este cliente?</p>
	<form action="destroy.php" action="GET">
		<input 
			type="hidden" 
			name="cliente_id" 
			value="<?php echo($cliente['id']) ?>">
			<a href="index.php">Não</a>
			<button type="submit">Sim</button>
	</form>
</body>
</html>