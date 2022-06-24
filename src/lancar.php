<?php
include (__DIR__.'/../scripts/verificalogin.php');
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
		<title>Lançamento do <?= $_SESSION['islogged'];?></title>
	</head>
	<body>
		<div class="initindex" align="center">
			<h1>
				<i class="bi bi-clipboard-data"></i> Sistema de Lançamentos</h1><small>v.0.1.2(beta)</small>
		</div>
		<div class="minhaconta" align="center">
			<div class="initconta">
				<a href="../index.php">Home</a>
				<p>Conta do <span><?=$_SESSION['islogged'];?></span><a href="../scripts/logout.php">Sair</a></p>
			</div>
		</div>
		<div class="formlancar" align="center">
			<form method="POST" action="../scripts/lancardb.php">
				<div align="left">
				<label for="nomelanca">Nome do lançamento</label>
				<input class="form-control form-control-lg" type="text" name="nomelanca" id="nomelanca" placeholder="Nome do Lançamento" maxlength="20" required>
				<label for="valorlanca">Valor do lançamento</label>
				<input class="form-control form-control-lg" type="number" name="valorlanca" id="valorlanca" placeholder="0"required>
				<label id="label-form" for="tipolanca">Tipo de lançamento</label>
				<select class="form-select form-select-lg mb-3" name="tipolanca" id="tipolanca">
					  <option selected value="1">Entrada</option>
					  <option value="0">Saída</option>
				</select>
				</div>
				<button type="submit" class="btn btn-info">Criar Lançamento</button>
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>