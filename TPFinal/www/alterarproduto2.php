<?php
	$id = $_POST['produtos'];
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
	$sql = "UPDATE produtos SET imagem = '$destino', updated_at = NOW() WHERE id = '$id'";
	echo $sql;
	$resultado = $conexao->query($sql);

	require('operadorpag.php');

	if ($conexao->connect_errno) {
		echo '<script>alert("Imagem não alterada")</script>';
    		die("Falha de conex�o!");
  	} else {
    		echo '<script>alert("Imagem alterada")</script>';

  }
