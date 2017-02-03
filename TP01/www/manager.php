<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> LabCenter - Analises clinicas </title>
	<link rel="stylesheet" type="text/css" href="files/style_manager.css" />
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
				<h1 id="title1"> Area restrita </h1>
				<p id="paragraph1"> Apenas administradores </p><br>
				<form action="validar2.php" method="post">
					Login: <br>
					<input type="text" name="login">
					<br>
					Senha: <br>
					<input type="password" name="pass">
					<br> <br>
					<input type="submit" value="Acessar">
					<input type="reset" value="Limpar">
				</form>

			</div>
		</div>
		
	</div>


</body>
<script src="files/scripts.js"></script>
</html>