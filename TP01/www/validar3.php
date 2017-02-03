<?php
	$id = 0;
	$login = $_POST['login'];
	$senha = $_POST['pass'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT id FROM pacientes WHERE login = '$login' AND senha = '$senha' ";

	$resultado = $conexao->query($sql);
	if($resultado->num_rows > 0){
		$linha = $resultado->fetch_assoc();
			$ID = $linha['id'];
			session_start();
			$_SESSION['id3'] = $ID;
			require('menupac.php');
			echo '<script>alert("Seja bem vindo !")</script>';
	}
	else{
		require('patient.php');
		echo '<script>alert("Usuario nao encontrado !")</script>';
	}	
	
