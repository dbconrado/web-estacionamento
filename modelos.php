<?php

	$conexao = new PDO("mysql:host=localhost;dbname=estacionamento", "estacionamento", "joselia");

	$sql = "SELECT * FROM Modelo";
	$resultado = $conexao->query($sql);

	$modelos = $resultado->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Modelos - IF Park</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
		<header>
		<h1>ℙ IF Park</h1>
	</header>
	<div id="container">
		<main>
			<h2>Modelos</h2>

			<button>+ Novo Modelo</button>

			<?php if (count($modelos) > 0): ?>
			<table class="tabela-dados">
					<thead>
						<tr>
							<th>Código</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($modelos as $m): ?>
						<tr>
							<td><?= $m['codmod'] ?></td>
							<td><?= $m['desc_2'] ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php else: ?>
			<p>Nenhum modelo foi cadastrado.</p>
			<?php endif; ?>
		</main>
	</div>
	<footer>
		<p>Desenvolvido com ♡ pelo Terceirão 2019.</p>
	</footer>

</body>
</html>