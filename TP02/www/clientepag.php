<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> AMICAO - PET SHOP </title>
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
				<h1 id="title1"> Area do cliente </h1>
				<table id="opcoesAdmin">
					<tr> 
						<th> Opcoes </th>
					</tr>
					<tr>
						<th><br><form action="opcaocliente1.php" method="post">
							<input type="submit" value="Alterar dados">
						</form></th>
					</tr>
					<tr>					
						<th><br><form action="opcaocliente2.php" method="post">
							<input type="submit" value="Historico de Compras">
						</form></th>					
					</tr>	
					<tr>					
						<th><br><form action="opcaocliente3.php" method="post">
							<input type="submit" value="Visualizar carrinho">
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