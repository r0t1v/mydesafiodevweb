<?php
require (__DIR__.'/../scripts/connect.php');
include (__DIR__.'/../scripts/verificalogin.php');

$conta=$_SESSION['conta'];
$verificalanca = "SELECT lancamento,valor,tipo FROM lancamentos WHERE conta_lanca='$conta'";
$verificalancaquery = mysqli_query($conn, $verificalanca);
$flaglanca= mysqli_num_rows($verificalancaquery);
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
				<form method="POST" action="../scripts/removelanca.php">
				<?php 
					if ($flaglanca) {
						echo '<table class="table table-hover">
								  <tbody>';
						$ponteiro=0;
						while ($dados = $verificalancaquery->fetch_assoc()){
						$exibilanca= $dados['lancamento'];
						$exibivalor= $dados['valor'];
						$exibitipo= $dados['tipo'];
						if($exibitipo){
							echo '<tr class="entrada">
								      <th scope="row"><i class="bi bi-arrow-up-square-fill"></i> '.$exibilanca.'</th>
								      <td align="right">+ R$ '.$exibivalor.' <i class="bi bi-graph-up-arrow"></i></td>
								    </tr>';
						}else{
							echo '<tr class="saida">
								      <th scope="row"><i class="bi bi-arrow-down-square-fill"></i> '.$exibilanca.'</th>
								      <td align="right">- R$'.$exibivalor.'<i class="bi bi-graph-down-arrow"></i></td>
								    </tr>';	    
						}	
					}
					echo '</tbody>
							</table>';
					}else{
						echo '<div class="alert alert-primary" role="alert">
						Você ainda não possui lançamentos!
								</div>';
					}
				?>
			</form>
			</div>
			<a class="btn btn-primary" href="lancar.php" role="button"><i class="bi bi-plus-circle"></i></a>
			<a class="btn btn-danger" href="removerlanca.php" role="button"><i class="bi bi-dash-circle"></i></a>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>