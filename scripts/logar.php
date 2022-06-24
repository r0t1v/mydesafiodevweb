<?php
session_start();
require (__DIR__.'/connect.php');

$loginuser= $_GET["login"];
$passuser= $_GET["pass"];

$logarquery = "SELECT idconta,login FROM contas WHERE login='$loginuser' AND senha='$passuser'";
$logar = mysqli_query($conn, $logarquery);
$rowlog= mysqli_num_rows($logar);

if ($rowlog) {
	$dados = $logar->fetch_assoc();
	$_SESSION['islogged'] = $dados['login'];
	$_SESSION['conta'] = $dados['idconta'];
	header("Location: ../src/minhaconta.php");
	exit;
}
else{
	$_SESSION['msg']='<div class="alert alert-danger" role="alert">Login ou senha incorretos!</div>';
	header("Location: ../src/login.php");
	exit;
}
mysqli_close($conn);