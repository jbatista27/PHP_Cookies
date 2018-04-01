<?php
	if(!isset($_COOKIE['usuario'])){
		header("Location: index.php");
	}else{
		setcookie('usuario',null);
		header("Location: index.php");
	}
?>
