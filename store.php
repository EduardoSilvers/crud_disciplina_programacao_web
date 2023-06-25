<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// recuperar os dados da requisição
		$nome = '';
		$cpf = '';
		$telefone = '';
		$data_nascimento = '';

		// validando campos
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];
		}
		if(isset($_POST['cpf'])){
			$cpf = $_POST['cpf'];
		}
		if(isset($_POST['telefone'])){
			$telefone = $_POST['telefone'];
		}
		if(isset($_POST['data_nascimento'])){
			$data_nascimento = $_POST['data_nascimento'];
		}

		// conexão com o banco
		if(empty($nome) || empty($cpf) || empty($telefone)){	
			echo("Existem campos obrigatórios sem preenchimento");
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

		// criar o registro na tabela
		$novocliente = $pdo->prepare(
			"INSERT INTO cliente
				(nome, cpf, telefone, data_nascimento)
					values
					(:nome, :cpf, :telefone, :data_nascimento);"
		); // prepara a query

		// define as variaveis com os valores
		$novocliente->bindParam(':nome', $nome);
		$novocliente->bindParam(':cpf', $cpf);
		$novocliente->bindParam(':telefone', $telefone);
		$novocliente->bindParam(':data_nascimento', $data_nascimento);

		// executar a inserção
		$novocliente->execute();

		echo("Cliente cadastrado com sucesso.");
	}
?>