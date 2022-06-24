<?php
require (__DIR__.'/../scripts/connect.php');
include (__DIR__.'/../scripts/verificalogin.php');

$removlanca= $_POST['nlanca'];
$contalanca= $_SESSION['conta'];

$removlancaquery = "DELETE FROM lancamentos WHERE idlancamento='$removlanca' AND conta_lanca='$contalanca'";
$removlancaexec = mysqli_query($conn,$removlancaquery);

header("Location: ../src/removerlanca.php");