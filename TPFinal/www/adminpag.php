<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> ROYALTY - JOIAS </title>
	<link rel="stylesheet" type="text/css" href="files/style_admin.css" />
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
				<h1 id="title1"> Area do administrador </h1>
				<table id="opcoesAdmin">
					<tr> 
						<th> Opcoes </th>
					</tr>
					<tr>
						<th><br><form action="opcaoadmin1.php" method="post">
							<input type="submit" value="Cadastrar produto">
						</form></th>
					</tr>
					<tr>					
						<th><br><form action="opcaoadmin2.php" method="post">
							<input type="submit" value="Excluir produto">
						</form></th>					
					</tr>	
					<tr>					
						<th><br><form action="opcaoadmin3.php" method="post">
							<input type="submit" value="Visualizar compras">
						</form></th>					
					</tr>
					<tr>					
						<th><br><form action="index.html" method="post">
							<input type="submit" value="Logoff">
						</form></th>					
					</tr>		
			</div>
			<div id="space3"><p> </p> </div>
		</div>
	</div>


</body>
<script src="files/scripts.js"></script>
</html>