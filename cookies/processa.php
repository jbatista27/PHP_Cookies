<?php
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	//unset($_COOKIE["usuario"]); -> apaga o cookies

	setcookie("usuario",$usuario, time()+300);
	setcookie("senha",$senha, time()+300);
	
	header("Location: home.php");
?>
