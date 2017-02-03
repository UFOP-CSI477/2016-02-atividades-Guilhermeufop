<?php
	$dia = $_POST['dia1'];
	$mes = $_POST['mes1'];
	$ano = $_POST['ano1'];
	$proced = $_POST['procedimento2'];
	$nome = $_POST['procedimento'];
	$cut = explode("_",$proced);
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	
	$sql2 = "SELECT id FROM procedimentos WHERE nome='$nome'";
	$resultado2 = $conexao->query($sql2);
	$linha = $resultado2->fetch_assoc();
	$idproce = $linha['id'];
	$data = $dia .'-'. $mes .'-'. $ano ;
	$name = $cut[0];
	$sql3 = "SELECT id FROM procedimentos WHERE nome= '$name'";
	$resultado3 = $conexao->query($sql3);
	$linha = $resultado3->fetch_assoc();
	$idproce2 = $linha['id'];		
	session_start();
	$idpa = $_SESSION['id3'];

	$data2 = $cut[1];
	$sql = "UPDATE exames SET procedimento_id = '$idproce', data = '$data' WHERE data = '$data2' AND procedimento_id = '$idproce2' AND paciente_id = '$idpa'";
	$resultado = $conexao->query($sql);
	
	if ($conexao->connect_errno) {
		echo '<script>alert("Exame nao alterado")</script>';
    		die("Falha de conexão!");
		require('menupac.php');
  	} else {	
		require('menupac.php');
    		echo '<script>alert("Exame alterado")</script>';

  }