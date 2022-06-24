<?php
session_start();
require (__DIR__.'/../scripts/connect.php');

$lanca=$_POST['nomelanca'];
$valor=$_POST['valorlanca'];
$tipo=$_POST['tipolanca'];
$conta=$_SESSION['conta'];

$lancarquery = "INSERT INTO lancamentos(conta_lanca,lancamento,valor,tipo) VALUES ('$conta','$lanca','$valor','$tipo')";
$lancar = mysqli_query($conn, $lancarquery);

header("Location: ../src/minhaconta.php");