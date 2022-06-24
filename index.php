<?php
session_start();
require (__DIR__.'/scripts/connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
  		<meta name="author" content="Vitor G. Dantas">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
		<link rel="stylesheet" href="styles/styles.css">
		<title>Home</title>
	</head>
	<body>
		<div class="initindex" align="center">
			<h1>
				<i class="bi bi-clipboard-data"></i> Sistema de Lançamentos</h1><small>v.0.1.2(beta)</small>
		</div>
		<div class="bodyindex" align="center">
			<div class="container">
				<div class="row" align="center">
					<?php
		      	 	if(isset($_SESSION['islogged'])){
				      	echo'<div class="col-sm-5">
					    <a class="btn btn-primary" href="src/minhaconta.php" role="button">
					     	<i class="bi bi-file-earmark-bar-graph-fill"></i> Meus Lançamentos
					     </a>
					</div>
					<div class="col-sm-5">
					    <a class="btn btn-outline-primary" href="scripts/logout.php" role="button">
					    	<i class="bi bi-box-arrow-right"></i> Sair
					    </a>
					</div>';
				    }else{
				      echo'<div class="col-sm-5">
					    <a class="btn btn-primary" href="src/login.php" role="button">
					     	<i class="bi bi-door-open-fill"></i> Logar com conta
					     </a>
					</div>
					<div class="col-sm-5">
					    <a class="btn btn-outline-primary" href="#" role="button">
					    	<i class="bi bi-plus-circle-dotted"></i> Criar uma conta
					    </a>
					</div>';
				    }
		      		?>
				 </div>
			</div>
		</div>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>