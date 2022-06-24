<?php
session_start();
require (__DIR__.'/../scripts/connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
  		<meta name="author" content="Vitor G. Dantas">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
		<link rel="stylesheet" href="../styles/styles.css">
		<title>Criar conta</title>
	</head>
	<body>
		<div class="initindex" align="center">
			<h1>
				<i class="bi bi-clipboard-data"></i> Sistema de Lançamentos</h1><small>v.0.1.2(beta)</small>
		</div>
		<div class="minhaconta" align="center">
			<div class="initconta">
				<a href="../index.php">Home</a>
			</div>
		<div class="criarcontaform">
			<h1>Criar conta</h1>
			<form method="POST" action="../scripts/criarcontadb.php">
				<div class="inputslogin" align="left">
					<label for="criarlogin">Login</label>
					<input class="form-control form-control-lg" type="text" name="criarlogin" id="criarlogin" placeholder="Seu login" aria-label=".form-control-lg example" maxlength="10" required>
					<label for="criarpass">Senha</label>
					<input class="form-control form-control-lg" type="password" name="criarpass" id="criarpass" placeholder="********" aria-label=".form-control-lg example" maxlength="10"required>
				</div>
				<button type="submit" class="btn btn-success">Criar conta</button>
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>