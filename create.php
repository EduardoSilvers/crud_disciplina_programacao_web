<!DOCTYPE html>
<html>
<head>
	<title>Criando um novo cliente</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="read.php" method="POST">
		Nome: <input 
			type="text" 
			name="nome" 
			placeholder="Nome completo">
		<br>
		COD: <input 
			type="text" 
			name="cod"
			placeholder="2000200300">
		<button type="submit">
			Enviar
		</button>
	</form>
	<a href="index.php">Voltar</a>
</body>
</html>