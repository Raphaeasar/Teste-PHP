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
	<h1>Confirmar Exclusão de Produto</h1>
	<hr>

	<?php
	if (isset($_GET['id'])) {

		include('conect.php');

		$id = $_GET['id'];

		$res = $conexao->query("SELECT * FROM products WHERE id='$id'");
		$linha = $res->fetch_assoc();


		/*echo 'NOME: ' . $linha['nome'] . '<br>';
		echo 'CRIADO: ' . $linha['created'] . '<br>';
		echo 'ATUALIZADO: ' . $linha['updated'] . '<br>';*/
	}

	if (isset($_POST['btnDel'])) {
		include('conect.php');

		$id = $_POST['id'];

		$conexao->query("DELETE FROM products WHERE id='$id'");

		echo '<h3>Dados Excluidos com Sucesso!</h3>';
		echo '<a href="lista_produtos.php">VOLTAR</a>';
		exit();
	}

	?>

	<div class="container">
		<form action="excluir_produto.php" method="post">
			<div class="row">
				<div class="col-25">
					<label for="nome">CÓDIGO CATEGORIA:</label>
				</div>
				<div class="col-75">
					<input type="text" name="id" value="<?php echo $_GET['id']; ?>">
				</div>
			</div>
			<div class=" row">
				<input type="submit" name="btnDel" value="Deletar"><br><br>
			</div>
		</form>
	</div>

	
	<br><a href="lista_produtos.php">VOLTAR PARA PRODUTOS</a><br>
	<br><a href="index.php">VOLTAR PARA MENU PRINCIPAL</a>

</body>

</html>