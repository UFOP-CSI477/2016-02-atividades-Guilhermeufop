<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$conexao = new mysqli("localhost","sispetshop","123456", "petshop"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT MAX(id) as maxi FROM users";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$aux = $linha["maxi"];
	$aux += 1;
	$tipo = 1;
	$sqli = "INSERT INTO users VALUES ('$aux', '$nome', '$email', '$senha','$tipo', '0',NOW(),NOW())";
	$conexao->query($sqli);
		
	require('cliente.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Usuario nao cadastrado")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Usuario cadastrado")</script>';
  }
	
	
	
