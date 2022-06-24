<?php 
session_start();
if(!isset($_SESSION["islogged"]))
{
	header("Location: login.php");
exit;
}