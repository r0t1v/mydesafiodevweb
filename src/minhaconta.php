<?php
require (__DIR__.'/../scripts/connect.php');
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
		<title>Conta do <?= $_SESSION['islogged'];?></title>
	</head>
	<body>
		<div class="initindex" align="center">
			<h1>
				<i class="bi bi-clipboard-data"></i> Sistema de Lançamentos</h1><small>v.0.1.2(beta)</small>
		</div>
		<div class="minhaconta" align="center">
			<div class="initconta">
				<a href="../index.php">Home</a>
				<p>Olá, <span><?=$_SESSION['islogged'];?></span><a href="../scripts/logout.php">Sair</a></p>
			</div>
			<div class="lancamentos">
				<h1><i class="bi bi-file-earmark-bar-graph-fill"></i> Meus lançamentos</h1>
				<?php 
					if (0) {
						echo '<table class="table table-hover">
								  <tbody>
								    <tr class="saida">
								      <th scope="row"><i class="bi bi-arrow-down-square-fill"></i> Compras</th>
								      <td align="right">- R$ 180,00 <i class="bi bi-graph-down-arrow"></i> <button type="submit" class="btn btn-danger"><i class="bi bi-dash-circle"></i></button></td>
								    </tr>
								    <tr class="entrada">
								      <th scope="row"><i class="bi bi-arrow-up-square-fill"></i> Depósito</th>
								      <td align="right">+ R$ 200,00 <i class="bi bi-graph-up-arrow"></i> <button type="submit" class="btn btn-danger"><i class="bi bi-dash-circle"></i></button></td>
								    </tr>
								    <tr class="entrada">
								      <th scope="row"><i class="bi bi-arrow-up-square-fill"></i> Depósito</th>
								      <td align="right">+ R$ 200,00 <i class="bi bi-graph-up-arrow"></i> <button type="submit" class="btn btn-danger"><i class="bi bi-dash-circle"></i></button></td>
								    </tr>
								  </tbody>
							</table>';
					}else{
						echo '<div class="alert alert-primary" role="alert">
						Você ainda não possui lançamentos!
								</div>';
					}
				?>
			</div>
			<a class="btn btn-primary" href="lancar.php" role="button"><i class="bi bi-plus-circle"></i></a>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>