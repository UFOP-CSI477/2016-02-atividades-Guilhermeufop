<?php
	$proced = $_POST['procedimento3'];
	$cut = explode("_",$proced);
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	
	$name = $cut[0];
	$sql3 = "SELECT id FROM procedimentos WHERE nome= '$name'";
	$resultado3 = $conexao->query($sql3);
	$linha = $resultado3->fetch_assoc();
	$idproce2 = $linha['id'];		
	session_start();
	$idpa = $_SESSION['id3'];

	$data2 = $cut[1];
	$sql = "DELETE FROM exames WHERE paciente_id = '$idpa' AND procedimento_id = '$idproce2' AND data = '$data2'";
	$resultado = $conexao->query($sql);
	
	if ($conexao->connect_errno) {
		echo '<script>alert("Exame nao excluido")</script>';
    		die("Falha de conexão!");
		require('menupac.php');
  	} else {	
		require('menupac.php');
    		echo '<script>alert("Exame excluido")</script>';

  }