<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$login = $_POST['login'];
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT MAX(id) as maxi FROM users";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$aux = $linha["maxi"];
	$aux += 1;
	$tipo = 1;
	$sqli = "INSERT INTO users VALUES ('$aux', '$nome', '$email', '$telefone', '$tipo', '$login', '$senha', '',NOW(),NOW())";
	$conexao->query($sqli);
		
	require('cliente.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Usuario nao cadastrado")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Usuario cadastrado")</script>';
  }
	
	
	
