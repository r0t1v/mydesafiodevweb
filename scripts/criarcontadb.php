<?php
session_start();
require (__DIR__.'/connect.php');

$criarloginuser= $_POST["criarlogin"];
$criarpassuser= $_POST["criarpass"];

$criarquery = "INSERT INTO contas (login,senha) VALUES ('$criarloginuser','$criarpassuser')";
$criar = mysqli_query($conn, $criarquery);
$rowlog= mysqli_num_rows($criar);

$_SESSION['msgi']='<div class="alert alert-success" role="alert">Conta criada!</div>';
header("Location: ../index.php");
exit;

mysqli_close($conn);