<?php
	$id = 0;
	$login = $_POST['login'];
	$senha = $_POST['pass'];
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT id, tipo FROM users WHERE nome = '$login' AND senha = '$senha' ";

	$resultado = $conexao->query($sql);
	if($resultado->num_rows > 0){
		$linha = $resultado->fetch_assoc();
			$ID = $linha['id'];
			session_start();
			$_SESSION['id3'] = $ID;
			$tipo = $linha['tipo'];
			if( $tipo == 1){
				require('clientepag.php');
				echo '<script>alert("Seja bem vindo !")</script>';
			}
			else{
				require('cliente.php');
				echo '<script>alert("Voce nao eh administrador !")</script>';
			}

	}
	else{
		require('cliente.php');
		echo '<script>alert("Usuario nao encontrado !")</script>';
	}
