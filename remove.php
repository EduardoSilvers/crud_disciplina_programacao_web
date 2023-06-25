<!DOCTYPE html>
<html>
<head>
	<title>Excluir cadastro de cliente</title>
	<meta charset="utf-8">
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
	<p>Tem certeza que deseja remover o cadastro?</p>
	<form action="destroy.php" action="GET">
		<input 
			type="hidden" 
			name="idcliente" 
			value="<?php echo($cliente['idcliente']) ?>">
			<a href="index.php">Não</a>
			<button type="submit">Sim</button>
	</form>
</body>
</html>