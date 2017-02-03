<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> LabCenter - Analises clinicas </title>
	<link rel="stylesheet" type="text/css" href="files/style_patient.css" />
</head>

<body>
	<div id="mainDiv">
		<div id="menu">
			<div id="logo" class="menuDiv">
			</div>
			<div id="home" class="menuDiv">
				<p id="menuHome" class="menuP"><a id="links1" class="links" href="index2.html" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)" > Home </a></p>
			</div>
			<div id="manager" class="menuDiv">
				<p id="menuManager" class="menuP" ><a id="links2" class="links" href="manager.php" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)"> Administrador </a></p>
			</div>
			<div id="patient" class="menuDiv">
				<p id="menuPatient" class="menuP"><a id="links3" class="links" href="patient.php" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)"> Paciente </a></p>
			</div>
			<div id="procedures" class="menuDiv">
				<p id="menuProcedures" class="menuP"><a id="links4" class="links" href="procedures.php" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)"> Procedimentos </a></p>
			</div>
		</div>
<div id="space"><p> </p></div>
		<div id="contentAll">	
			<div id="space2"><p> </p> </div>
			<div id="logar">
				<h1 id="title1"> Seja bem-vindo ! </h1>
				<p id="paragraph1"> Solicitar exame </p><br>
				<form action="solicitarExame.php" method="post">
					Dia: <input type="number" name="dia" min="1" max="31"><br>
					Mes: <input type="number" name="mes" min="1" max="12"><br>
					Ano: <input type="number" name="ano" min="2017" max="2030"><br>
					Procedimento:
					<select name="procedimento">
						<?php
							$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
							if($conexao->connect_errno){
								echo "falha na conexao!";
							}
							$sql = "SELECT id, nome, preco FROM procedimentos ORDER BY nome";
						$resultado = $conexao->query($sql);

						while($linha = $resultado->fetch_assoc()){ 	
							?>
							<option><?php echo $linha["nome"]; ?></option>
					<?php } ?>						
					<input type="submit" value="Cadastrar">
				</form><br>

				<p id="paragraph1"> Alterar exame </p><br>
				<form action="alterarExame.php" method="post">
				<select name="procedimento2">
						<?php
							$conexao2 = new mysqli("localhost","sianalise","123456", "analise"); 	
							if($conexao2->connect_errno){
								echo "falha na conexao!";
							}
							$idapa = $_SESSION['id3'];
							$sql2 = "SELECT p.nome, e.data FROM exames as e, procedimentos as p WHERE e.paciente_id = '$idapa' AND p.id = e.procedimento_id  ORDER BY p.nome, e.data";
							$resultado2 = $conexao2->query($sql2);

							while($linha = $resultado2->fetch_assoc()){
 								$mostrar = $linha["nome"] . "_" . $linha["data"];
								?>
							<option><?php echo $mostrar ?></option>
					<?php } ?>
					</select><br>	
					Dia: <input type="number" name="dia1" min="1" max="31"><br>
					Mes: <input type="number" name="mes1" min="1" max="12"><br>
					Ano: <input type="number" name="ano1" min="2017" max="2030"><br>
					Procedimento:
					<select name="procedimento">
						<?php
							$conexao3 = new mysqli("localhost","sianalise","123456", "analise"); 	
							if($conexao3->connect_errno){
								echo "falha na conexao!";
							}
							$sql3 = "SELECT id, nome, preco FROM procedimentos ORDER BY nome";
						$resultado3 = $conexao3->query($sql3);

						while($linha = $resultado3->fetch_assoc()){ 	
							?>
							<option><?php echo $linha["nome"]; ?></option>
					<?php } ?>
					</select><br>
											
					<input type="submit" value="Alterar">
				</form><br>
				<p id="paragraph1"> Excluir exame </p><br>
				<form action="excluirExame.php" method="post">
				<select name="procedimento3">
						<?php
							$conexao2 = new mysqli("localhost","sianalise","123456", "analise"); 	
							if($conexao2->connect_errno){
								echo "falha na conexao!";
							}
							$idapa = $_SESSION['id3'];
							$sql2 = "SELECT p.nome, e.data FROM exames as e, procedimentos as p WHERE e.paciente_id = '$idapa' AND p.id = e.procedimento_id  ORDER BY p.nome, e.data";
							$resultado2 = $conexao2->query($sql2);

							while($linha = $resultado2->fetch_assoc()){
 								$mostrar = $linha["nome"] . "_" . $linha["data"];
								?>
							<option><?php echo $mostrar ?></option>
					<?php } ?>
					</select><br>
					<input type="submit" value="Excluir">
				</form>
				<br>
				<h2> Procedimentos marcados </h2>
				<form>
					<?php
							$conexao = new mysqli("localhost","sianalise","123456", "analise"); 	
							if($conexao->connect_errno){
								echo "falha na conexao!";
							}
							$idapa = $_SESSION['id3'];
							$sql = "SELECT p.nome, e.data FROM exames as e, procedimentos as p WHERE e.paciente_id = '$idapa' AND p.id = e.procedimento_id  ORDER BY e.data";
							$resultado = $conexao->query($sql);

							while($linha = $resultado->fetch_assoc()){ 	
								?>
							<option><?php echo $linha["nome"] . "   " . $linha["data"] ?></option>
					<?php } ?>

				</form>
				<br><br>

			</div>
		</div>
		
	</div>
		
	</div>

