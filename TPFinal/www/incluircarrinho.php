<?php
	$id = 0;
	$login = $_POST['nome'];
	$senha = $_POST['senha'];
	$produto = $_POST['produtos'];
	$quantidade = $_POST['quantidade'];
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT id, tipo FROM users WHERE nome = '$login' AND senha = '$senha' ";

	$resultado = $conexao->query($sql);
	if($resultado->num_rows > 0){
			$linha = $resultado->fetch_assoc();
			$userId = $linha['id'];
			$tipo = $linha['tipo'];
			if($tipo == 1){
				$sql = "SELECT MAX(id) as maxi FROM compras";
				$resultado = $conexao->query($sql);
				$linha = $resultado->fetch_assoc();
				$aux = $linha["maxi"];
				$aux += 1;
				
				$sqli = "INSERT INTO compras VALUES ('$aux', '$userId', '$produto', '$quantidade',NOW(),$tipo, NOW(),NOW())";
				$conexao->query($sqli);
				require('produtos.php');
				echo '<script>alert("Produto adicionado !")</script>';
				
			}
			else{
				echo '<script>alert("Voce nao e cliente !")</script>';
				exit;
			}
	}
	else{
		require('produtos.php');
		echo '<script>alert("Usuario nao encontrado !")</script>';
	}	
	