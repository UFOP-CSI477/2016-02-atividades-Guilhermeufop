<?php
	session_start();
	$idcl = $_SESSION['id3'];
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "UPDATE compras SET situacao = 2, updated_at = NOW(), datacompra = NOW() WHERE user_id = '$idcl'";
	echo $sql;
	$resultado = $conexao->query($sql);
	
	require('clientepag.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Compra nao realizada")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Compra realizada")</script>';

  }