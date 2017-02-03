<?php
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['pass'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT MAX(id) as maxi FROM pacientes";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$aux = $linha["maxi"];
	$aux += 1;
	$sqli = "INSERT INTO pacientes VALUES ('$aux', '$nome', '$login', '$senha')";
	$conexao->query($sqli);
		
	require('patient.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Usuario nao cadastrado")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Usuario cadastrado")</script>';
  }
	
	
	
