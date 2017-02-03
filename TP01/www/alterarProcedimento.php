<?php
	$nome = $_POST['procedimento'];
	$preco = $_POST['preco'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "UPDATE procedimentos SET preco = '$preco' WHERE nome = '$nome'";
	$resultado = $conexao->query($sql);
	
	require('menuadm2.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Procedimento nao alterado")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Procedimento alterado")</script>';

  }