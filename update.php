<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// recuperar os dados da requisição
		$cliente_id = '';
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

		// validando campo cliente_id
		if(isset($_POST['cliente_id'])){
			$cliente_id = $_POST['cliente_id'];
		}

		// conexão com o banco
		if(empty($nome) && empty($cod) && empty($cliente_id)){
			echo("Os campos nome e cod não podem ser vazios");
			exit();
		}

		// conectando no banco de dados
		$usuario = "aromas.php";
		$senha = "php2023*";
		$pdo = new PDO(
			"mysql:host=localhost;dbname=cliente",
			$usuario,
			$senha
		);

		$atualizaaluno = $pdo->prepare(
			"UPDATE aromas_lavanderia 
			SET nome=?, cod=? 
			WHERE id=?"
		);

		$atualizaaluno->execute([
			$nome,
			$ra,
			$cliente_id
		]);


		echo "Cliente atualizado com sucesso..";
	}
?>