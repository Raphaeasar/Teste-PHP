<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Sistema CRUD em PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>

<body>
	<h1>Cadastrar Categoria</h1>
	<hr>

	<div class="container">
		<form action="cadastrar_categoria.php" method="post">
			<div class="row">
				<div class="col-75">
					<input type="hidden" name="category_id"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="nome">NOME:</label>
				</div>
				<div class="col-75">
					<input type="text" id="nome" name="nome" placeholder="">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="nome">CRIADO:</label>
				</div>
				<div class="col-75">
					<input type="date" id="created" name="created" placeholder="">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="nome">ATUALIZADO:</label>
				</div>
				<div class="col-75">
					<input type="date" id="updated" name="updated" placeholder="">
				</div>
			</div>
			<div class="row">
				<input type="submit" name="btnCad" value="Cadastrar"><br><br>
			</div>
		</form>
	</div>

	<?php
	if (isset($_POST['btnCad'])) {
		include('conect.php');

		$id = $_POST["category_id"];
		$name = $_POST["nome"];
		$created = $_POST["created"];
		$updated = $_POST["updated"];

		$conexao->query("INSERT INTO categories VALUES('$id','$name', '$created', '$updated')");

		echo '<h3>Dados Cadastrados com Sucesso!</h3>';
	}

	?>

	<br><a href="lista_categoria.php">VOLTAR PARA LISTA DE CATEGORIA</a><br>
	<br><a href="index.php">VOLTAR PARA MENU PRINCIPAL</a>


</body>

</html>