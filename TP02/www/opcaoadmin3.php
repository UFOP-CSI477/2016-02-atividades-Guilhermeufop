<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<title> AMICAO - PET SHOP </title>
	<link rel="stylesheet" type="text/css" href="files/style_produtos.css" />
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
				<table id="tableProdutos">
					<tr>
						<th id="td1"> Codigo&nbsp&nbsp&nbsp&nbsp&nbsp </th>
						<th id="td2"> Foto&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
						<th id="td3"> Nome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
						<th id="td4"> Usuario&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
					</tr>
					<?php
						$conexao = new mysqli("localhost","sispetshop","123456", "petshop"); 	
						if($conexao->connect_errno){
							echo "falha na conexao!";
						}
						$sql = "SELECT c.id as id, p.nome as nomep, p.imagem as imagem, u.nome as nomeu FROM compras as c, users as u, produtos as p WHERE c.produto_id = p.id AND u.id = c.user_id ORDER BY c.datacompra";
						$resultado = $conexao->query($sql);

						while($linha = $resultado->fetch_assoc()){ 	
						?>
					<tr>
						<td><?php echo $linha["id"]; ?></td>
						<td> <?php echo '<img src="'. $linha['imagem'] . '"/>' ?> </td>
						<td><?php echo $linha["nomep"]; ?></td>
						<td><?php echo $linha["nomeu"]; ?></td>
					</tr>
						<?php } ?>	
	
				</table>
				<form action="adminpag.php" method="post" id ="form1">
					<p><input type="submit" value="Voltar"></p>
				</form>

			</div>
			
			
			</div>	
				



			</div>
			
			<div id="space3"><p></p> </div>
		</div>
	</div>


</body>
<script src="files/scripts.js"></script>
</html>