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
	<h1>Lista de Produtos</h1>
	<hr>

	<div class="container">
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>CÓDIGO CATEGORIA</th>
					<th>NOME</th>
					<th>CRIADO</th>
					<th>ATUALIZADO</th>
					<th colspan="2">CONTROLES</th>
				</tr>
				<?php include('conect.php');
				$res = $conexao->query("SELECT * FROM products");
				?>
				<?php while ($linha = $res->fetch_assoc()) { ?>
			</thead>
			<tbody>

				<tr>
					<td><?php echo $linha['id']; ?></td>
					<td><?php echo $linha['category_id']; ?></td>
					<td><?php echo $linha['nome']; ?></td>
					<td><?php echo $linha['created']; ?></td>
					<td><?php echo $linha['updated']; ?></td>
					<td><a href="alterar_produto.php?id=<?php echo $linha['id']; ?> ">Alterar</a></td>
					<td><a href="excluir_produto.php?id=<?php echo $linha['id']; ?> ">Excluir</a></td><br><br><br>
				</tr>
			<?php  }  ?>
			</tbody>
		</table>
	</div>

	<br><a href="index.php">VOLTAR PARA MENU PRINCIPAL</a>

</body>


</html>