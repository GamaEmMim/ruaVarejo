<?php
	session_start();
	$user = $_POST['username'];
	$password = md5($_POST['password']);
	if (($user == "gamaacademy") && ($password == "cc87db24cad49b0f9e95ff20791e72f7")){
		$_SESSION['logged'] = true;
		header("location:/protected/buscaClientes.php");
	}else{
		header("location:/");
	}
?>