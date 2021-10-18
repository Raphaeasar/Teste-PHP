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
	<h1>Alterar Produto</h1>
	<hr>

	<?php
	if (isset($_POST['btnAlt'])) {
		include('conect.php');


		$name = $_POST['nome'];
		$created = $_POST["created"];
		$updated = $_POST["updated"];


		$conexao->query("UPDATE products SET nome='$name', created='$created', updated='$updated'");

		echo '<h3>Dados Alterados com Sucesso!</h3>';
	}

	if (isset($_GET['id'])) {
		
		include('conect.php');

		$id = $_GET['id'];

		$res = $conexao->query("SELECT * FROM products WHERE id='$id'");
		$linha = $res->fetch_assoc();

		$name = $linha['nome'];
		$created = $linha["created"];
		$updated = $linha["updated"];
	}

	?>

	<div class="container">
		<form action="alterar_produto.php" method="post">
			<div class="row">
				<div class="col-25">
					<label for="nome">NOME:</label>
				</div>
				<div class="col-75">
					<input type="text" name="nome" value="<?php echo $name; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="nome">CRIADO:</label>
				</div>
				<div class="col-75">
					<input type="date" name="created" value="<?php echo $created; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="nome">ATUALIZADO:</label>
				</div>
				<div class="col-75">
					<input type="date" name="updated" value="<?php echo $updated; ?>">
				</div>
			</div>
			<div class=" row">
				<input type="submit" name="btnAlt" value="Alterar"><br><br>
		</form>
	</div>


	<br><a href="lista_produtos.php">VOLTAR PARA PRODUTOS</a><br>
	<br><a href="index.php">VOLTAR PARA MENU PRINCIPAL</a>

</body>

</html>