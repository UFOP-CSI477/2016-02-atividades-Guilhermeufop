<?php
	$preco = $_POST['preco'];
	$id = $_POST['produtos'];
	$conexao = new mysqli("localhost","sispetshop","123456", "petshop"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "UPDATE produtos SET preco = '$preco', updated_at = NOW() WHERE id = '$id'";
	echo $sql;
	$resultado = $conexao->query($sql);
	
	require('operadorpag.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Compra nao realizada")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Compra realizada")</script>';

  }