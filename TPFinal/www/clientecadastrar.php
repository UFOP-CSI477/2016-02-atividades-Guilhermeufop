<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> ROYALTY - JOIAS </title>
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
				<h1 id="title1"> Cadastro </h1>
				<form action="novocliente.php" method="post" id ="form1">
					<p>&nbsp&nbsp&nbsp&nbsp&nbspNome:&nbsp&nbsp&nbsp&nbsp <input type="text" name="nome"> </p>
					<p>&nbsp&nbsp&nbsp&nbsp&nbspEmail:&nbsp&nbsp&nbsp&nbsp <input type="email" name="email"> </p> 
					<p>&nbsp&nbsp&nbsp&nbsp&nbspTelefone:&nbsp&nbsp&nbsp&nbsp <input type="text" name="telefone"> </p> 
					<p>&nbsp&nbsp&nbsp&nbsp&nbspLogin:&nbsp&nbsp&nbsp&nbsp <input type="text" name="login"> </p> 
					<p>&nbsp&nbsp&nbsp&nbspSenha:&nbsp&nbsp&nbsp&nbsp <input type="password" name="senha"> </p>
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Cadastrar"></p>
				</form>
			</div>
			<div id="space3"><p> </p> </div>
		</div>
	</div>


</body>
<script src="files/scripts.js"></script>
</html>