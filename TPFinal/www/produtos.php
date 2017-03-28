<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> ROYALTY - JOIAS </title>
	<link rel="stylesheet" type="text/css" href="files/style_produtos2.css" />
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
			<div id="contentProdutos">
			<div id="textE">
				<p> Aliancas <br>
				 <a href="produtos1.php">
  					<img src="files/images/p1.jpg" alt="Aliancas">
				</a> 	<br></p>
				<p> Brincos <br>
				 <a href="produtos2.php">
  					<img src="files/images/p2.jpg" alt="Brincos">
				</a> 	<br></p>
				<p> Colares <br>
				 <a href="produtos3.php">
  					<img src="files/images/p3.jpg" alt="Colares">
				</a> 	<br></p>
				<p> Pingentes <br>
				 <a href="produtos4.php">
  					<img src="files/images/p4.jpg" alt="Pingentes">
				</a> 	<br></p>
				<p> Pulseiras <br>
				 <a href="produtos5.php">
  					<img src="files/images/p5.jpg" alt="Pulseiras">
				</a> 	<br></p>
				<p> Solitarios <br>
				 <a href="produtos6.php">
  					<img src="files/images/p6.jpg" alt="Solitarios">
				</a> 	<br></p>
			</div>
			<div id="carrinho">
				<h2 id="title2"> Carrinho de compras </h2>
				<p id="text2"> Para finalizar suas compras entre na area do cliente </p>
				<form action="incluircarrinho.php" method="post">
					<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDados do cliente:<br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNome: <input type="text" name="nome"><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSenha: <input type="password" name="senha"><br>
					<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProduto (ID):
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="produtos">
						<?php
							$conexao = new mysqli("localhost","sisroyalty","123456", "royalty");
							if($conexao->connect_errno){
								echo "falha na conexao!";
							}
							$sql = "SELECT id FROM produtos ORDER BY id";
						$resultado = $conexao->query($sql);

						while($linha = $resultado->fetch_assoc()){
							?>
							<option><?php echo $linha["id"]; ?></option>
					<?php } ?></select>
					&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Incluir">

					<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQuantidade:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select name="quantidade">
						<option> 1 </option>
						<option> 2 </option>
						<option> 3 </option>
						<option> 4 </option>
						<option> 5 </option>
					</select>


				</form><br>

			</div>




			</div>

			<div id="space3"><p></p> </div>
		</div>
	</div>


</body>
<script src="files/scripts.js"></script>
</html>
