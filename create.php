<!DOCTYPE html>
<html>
<head>
	<title>Adicionar novo cliente</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="card">
  <h5 class="card-header">Adicionar novo cliente</h5>
  <div class="card-body">
	<form action="store.php" method="POST">
		<div class="row mb-2">
			<div class="col">
				Nome: <input 
					type="text" 
					name="nome">
			</div>
			<div class="col">
				CPF: <input 
					type="text" 
					name="cpf">				
			</div>		
			<div class="col">
				Telefone: <input 
					type="text" 
					name="telefone">
			</div>
			<div class="col">
				Data de nascimento: <input 
					type="date" 
					name="data_nascimento">
			</div>		
		</div>	
		<div class="d-grid gap-2 row">
			<div class="col">
				<a class="btn btn-primary" href="index.php">Voltar</a>
			</div>	
			<div class="col">
				<button class="btn btn-success" type="submit">
						Enviar
				</button>
			</div>
					
		</div>	
	</form>
		    
 	</div>
</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>