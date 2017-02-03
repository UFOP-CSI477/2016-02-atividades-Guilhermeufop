<?php
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT MAX(id) as maxi FROM procedimentos";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$aux = $linha["maxi"];
	$aux += 1;
	session_start();
	$ida = $_SESSION['id2']; 
	$sqli = "INSERT INTO procedimentos VALUES ('$aux', '$nome', '$preco', '$ida')";
	$conexao->query($sqli);
		
	require('menuadm1.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Procedimento nao cadastrado")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Procedimento cadastrado")</script>';

  }