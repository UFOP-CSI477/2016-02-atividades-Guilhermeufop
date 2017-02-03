<?php
	$id = 0;
	$login = $_POST['login'];
	$senha = $_POST['pass'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT tipo,id FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
	$resultado = $conexao->query($sql);
	if($resultado->num_rows > 0){
		$linha = $resultado->fetch_assoc();
		if($linha['tipo'] == 1){
			$ID = $linha['id'];
//
			session_start();
			$_SESSION['id2'] = $id["ID"];
//
			require('menuadm1.php'); 
			echo '<script>alert("Seja bem vindo !")</script>';
		}
		else{
			require('menuadm2.php'); 
			echo '<script>alert("Seja bem vindo !")</script>';
		}
	}	
	else{
		require('manager.php');
		echo '<script>alert("Usuario nao encontrado !")</script>';
	}
	
	
	
	
