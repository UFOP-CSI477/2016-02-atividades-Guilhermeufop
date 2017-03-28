<?php
	$nome = $_POST['nome'];
	$email = $_POST['email']; 
	$senha = $_POST['senha'];

	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}

	session_start();
	$idpa = $_SESSION['id3'];

	$sql = "UPDATE users SET nome = '$nome', senha = '$senha', email = '$email' WHERE id = '$idpa'";
	$resultado = $conexao->query($sql);
	
	if ($conexao->connect_errno) {
		echo '<script>alert("Dados nao alterados")</script>';
    		die("Falha de conexão!");
		require('clientepag.php');
  	} else {	
		require('clientepag.php');
    		echo '<script>alert("Dados alterados")</script>';

  }	