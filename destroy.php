<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'GET'){

		// recuperar os dados da requisição
		$idcliente = '';

		// validando campo
		if(isset($_GET['idcliente'])){
			$idcliente = $_GET['idcliente'];
		}
		if(empty($idcliente)){
			echo("Cliente inválido");
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

		$removecliente = $pdo->prepare(
			"DELETE FROM cliente where idcliente=?"
		);

		$removecliente->execute([
			$idcliente
		]);


		echo "Cadastro removido com sucesso";
	}
?>