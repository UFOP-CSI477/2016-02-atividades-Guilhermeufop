<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> AMICAO - PET SHOP </title>
	<link rel="stylesheet" type="text/css" href="files/style_cliente.css" />
</head>

<body>
	<div id="mainDiv">
		<div id="menu">
			<div id="logo" class="menuDiv">
			</div>
			<div id="home" class="menuDiv">
				<p id="menuHome" class="menuP"><a id="links1" class="links" href="index.html" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)" > Home </a></p>
			</div>
			<div id="admin" class="menuDiv">
				<p id="menuAdmin" class="menuP" ><a id="links2" class="links" href="admin.php" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)"> Administrador </a></p>
			</div>
			<div id="cliente" class="menuDiv">
				<p id="menuCliente" class="menuP"><a id="links3" class="links" href="cliente.php" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)"> Cliente </a></p>
			</div>
			<div id="produtos" class="menuDiv">
				<p id="menuProdutos" class="menuP"><a id="links4" class="links" href="produtos.php" onmouseover="changeColor(this)" onmouseout="begin()" onclick="changeContent(0)"> Produtos </a></p>
			</div>
		</div>
		
		<div id="space"><p> </p></div>
		<div id="contentAll">	
			<div id="space2"><p> </p> </div>
			<div id="textE">
				<br><h1 id="title1"> Faca seu login </h1>
				<form action="validarcliente.php" method="post" id ="form1">
					<p id="pOne">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogin:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSenha:<p>
					<p> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="login">
					&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="password" name="pass"></p>
					
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="submit" value="Acessar">&nbsp&nbsp&nbsp&nbsp
					<input type="reset" value="Limpar"></p>
				</form>
				<form action="clientecadastrar.php" method="post" id="form2">
					<p><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAinda nao eh cadastrado ??&nbsp&nbsp&nbsp<input type="submit" value="Cadastrar"></p>
				</form>


			</div>
			<div id="space3"><p> </p> </div>
		</div>
	</div>


</body>
<script src="files/scripts.js"></script>
</html>