<?php
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];
	$foto = $_FILES['foto'];
	$extensao = ".jpg";
	$foto['name'] = time().uniqid(md5('name')).$extensao;
	$destino = 'imagens/' . $foto['name'];
	$arquivo_tmp = $foto['tmp_name'];
	move_uploaded_file( $arquivo_tmp, $destino );

		
	
	$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT MAX(id) as maxi FROM produtos";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$aux = $linha["maxi"];
	$aux += 1;
	$tipo = 1;


	$sqli = "INSERT INTO produtos VALUES ('$aux', '$nome', '$descricao', '$destino', '$preco', '$categoria' , NOW(),NOW())";
	$conexao->query($sqli);
		
	require('adminpag.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Produto nao cadastrado")</script>';
    		die("Falha de conexão!");
  	} else {
    		echo '<script>alert("Produto	 cadastrado")</script>';
  }
	
	
	
