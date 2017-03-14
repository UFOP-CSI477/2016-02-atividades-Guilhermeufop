<?php
	$id = $_POST['id'];

	$conexao = new mysqli("localhost","sispetshop","123456", "petshop"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT * FROM compras WHERE produto_id = '$id'";
	$resultado = $conexao->query($sql);
	if($resultado->num_rows > 0){
		require('adminpag.php');
    		echo '<script>alert("Produto nao pode ser excluido")</script>';
		exit;
	}
	else{
		$sqli = "DELETE FROM produtos WHERE id = '$id'";
		$conexao->query($sqli);
		
		require('adminpag.php');

		if ($conexao->connect_errno) {
			echo '<script>alert("Produto excluido!")</script>';
    			die("Falha de conexão!");
  		} else {
    			echo '<script>alert("Produto excluido")</script>';
 		}
	}
