<?php
	$preco = $_POST['preco'];
	$id = $_POST['produtos'];
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "UPDATE produtos SET preco = '$preco', updated_at = NOW() WHERE id = '$id'";
	echo $sql;
	$resultado = $conexao->query($sql);

	require('operadorpag.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Valor nao atualizado")</script>';
    		die("Falha de conex�o!");
  	} else {
    		echo '<script>alert("Valor atualizado")</script>';

  }
