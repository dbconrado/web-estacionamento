<?php

var_dump($_POST);

if (count($_POST) > 0) {
	// inserir no banco de dados

	$banco = "estacionamento";
	$usuario = "estacionamento";
	$senha = "joselia";

	$conexao = new PDO("mysql:host=localhost;dbname=${banco}", $usuario, $senha);

	$sql = "INSERT INTO Cliente VALUES (?, ?, ?)";

	$comando = $conexao->prepare($sql);

	$comando->execute([
		$_POST['cpf'],
		$_POST['nome'],
		$_POST['data-nascimento']
	]);

	// redireciona para a página clientes.php
	header('Location: clientes.php');
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<title>Novo Cliente - IF Park</title>
 	<link rel="stylesheet" href="css/estilo.css">
 </head>
 <body>
 	
	<header>
		<h1>ℙ IF Park</h1>
	</header>
	<div id="container">
		<main>
			<h2>Novo Cliente</h2>

			<form action="cadcliente.php" method="post">
				<p><label for="icpf">CPF:</label></p>
				<p><input type="number" id="icpf" name="cpf"></p>
				<p><label for="inome">Nome:</label></p>
				<p><input type="text" id="inome" name="nome"></p>
				<p><label for="idtnasc">Data Nascimento</label></p>
				<p><input type="date" id="idtnasc" name="data-nascimento"></p>
				<p><button type="submit">Salvar</button></p>
			</form>

		</main>
	</div>
	<footer>
		<p>Desenvolvido com ♡ pelo Terceirão 2019.</p>
	</footer>

 </body>
 </html>