<?php
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$nome = $_POST['procedimento'];
	$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
	if($conexao->connect_errno){
		echo "falha na conexao!";
	}
	$sql = "SELECT MAX(id) as maxi FROM exames";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_assoc();
	$aux = $linha["maxi"];
	$aux += 1;
	
	
	$sql2 = "SELECT id FROM procedimentos WHERE nome='$nome'";
	$resultado2 = $conexao->query($sql2);
	$linha = $resultado2->fetch_assoc();
	$idproce = $linha['id'];
	$data = $dia .'-'. $mes .'-'. $ano;
	
	session_start();
	$idpa = $_SESSION['id3'];

	 
	
	$sqli = "INSERT INTO exames VALUES ('$aux', '$idpa', '$idproce', '$data')";
	$conexao->query($sqli);
		
	

	if ($conexao->connect_errno) {
		echo '<script>alert("Exame nao cadastrado")</script>';
    		die("Falha de conexão!");
		require('menupac.php');
  	} else {
		require('menupac.php');
    		echo '<script>alert("Exame cadastrado")</script>';

  }