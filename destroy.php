<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'GET'){

		// recuperar os dados da requisição
		$cliente_id = '';

		// validando campo cliente_id
		if(isset($_GET['cliente_id'])){
			$cliente_id = $_GET['cliente_id'];
		}

		// conexão com o banco
		if(empty($cliente_id)){
			echo("Dados invalidos....");
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

		$removecliente = $pdo->prepare(
			"DELETE FROM `aromas_lavanderia` where id=?"
		);

		$removecliente->execute([
			$cliente_id
		]);


		echo "Cliente removido com sucesso..";
	}
?>