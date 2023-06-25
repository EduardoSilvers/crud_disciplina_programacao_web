<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// recuperar os dados da requisição
		$nome = '';
		$cod = '';

		// validando campo nome
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];
		}

		// validando campo cod
		if(isset($_POST['cod'])){
			$cod = $_POST['cod'];
		}

		// conexão com o banco
		if(empty($nome) && empty($cod)){
			echo("Os campos nome e cod não podem ser vazios");
			exit();
		}

		// conectando no banco de dados
		$usuario = "aromas.php";
		$senha = "php2023*";
		$pdo = new PDO(
			"mysql:host=localhost;dbname=aluno",
			$usuario,
			$senha
		);

		// criar o registro na tabela
		$novocliente = $pdo->prepare(
			"INSERT INTO `aromas_lavanderia`(nome, cod) VALUES(:nome,:cod)"
		); // prepara a query

		// define as variaveis com os valores
		$novocliente->bindParam(':nome', $nome);
		$novocliente->bindParam(':cod', $cod);

		// executar a inserção
		$novocliente->execute();

		echo("Novo cliente criado com sucesso.");
	}
?>