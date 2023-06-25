<!DOCTYPE html>
<html>
<head>
	<title>Editar cadastro do cliente</title>
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
	<form action="update.php" method="POST">
		<input 
			type="hidden" 
			name="idcliente" 
			value="<?php echo($cliente['idcliente']) ?>">
		Nome: <input 
			type="text" 
			name="nome" 
			value="<?php echo($cliente['nome']) ?>">
		<br>
		CPF: <input 
			type="text" 
			name="cpf"
			value="<?php echo($cliente['cpf']) ?>">
		telefone: <input 
			type="text" 
			name="telefone"
			value="<?php echo($cliente['telefone']) ?>">
		Data de nascimento: <input 
			type="text" 
			name="data_nascimento"
			value="<?php echo($cliente['data_nascimento']) ?>">
		<button type="submit">
			Atualizar
		</button>
	</form>
	<a href="index.php">Voltar</a>
</body>
</html>