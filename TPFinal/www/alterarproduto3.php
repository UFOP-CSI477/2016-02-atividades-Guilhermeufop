<?php
	$descricao = $_POST['descricao'];
	$id = $_POST['produtos'];
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "UPDATE produtos SET descricao = '$descricao', updated_at = NOW() WHERE id = '$id'";
	echo $sql;
	$resultado = $conexao->query($sql);

	require('operadorpag.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Descrição nao alterada")</script>';
    		die("Falha de conex�o!");
  	} else {
    		echo '<script>alert("Descrição alterada")</script>';

  }
