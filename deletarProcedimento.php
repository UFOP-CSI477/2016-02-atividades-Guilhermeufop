<?php
	$nome = $_POST['procedimento'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	
	$sql = "SELECT id FROM procedimentos WHERE nome='$nome'";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$idproce = $linha['id'];

	$sql = "SELECT * FROM exames WHERE procedimento_id='$idproce'";
	$resultado = $conexao->query($sql);
	if($resultado->num_rows == 0){
			$sql = "DELETE FROM procedimentos WHERE nome = '$nome'";
			$resultado = $conexao->query($sql);
	    		echo '<script>alert("Procedimento deletado")</script>';
	}
	else{
		echo '<script>alert("Procedimento nao deletado")</script>';
	}	
	require('menuadm1.php');

	if ($conexao->connect_errno) {
    		die("Falha de conexão!");
  	} else {

  }