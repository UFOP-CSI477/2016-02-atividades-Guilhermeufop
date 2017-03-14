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
						<th id="td1"> Quantidade&nbsp&nbsp&nbsp&nbsp&nbsp </th>
						<th id="td2"> Foto&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
						<th id="td3"> Nome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
						<th id="td4"> Preco(R$)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
					</tr>
					<?php
						session_start();
						$idcl = $_SESSION['id3'];
						$conexao = new mysqli("localhost","sispetshop","123456", "petshop"); 	
						if($conexao->connect_errno){
							echo "falha na conexao!";
						}
						$sql = "SELECT p.id as id, p.nome, p.preco as preco, p.imagem as imagem, cr.quantidade as quantidade FROM produtos as p, compras as cr WHERE '$idcl' = cr.user_id AND cr.produto_id = p.id AND situacao = 2 ORDER BY cr.updated_at";
						$resultado = $conexao->query($sql);

						while($linha = $resultado->fetch_assoc()){ 	
						?>
					<tr>
						<td><?php echo $linha["quantidade"]; ?></td>
						<td> <?php echo '<img src="'. $linha['imagem'] . '"/>' ?> </td>
						<td><?php echo $linha["nome"]; ?></td>
						<td><?php echo $linha["preco"]; ?></td>
					</tr>
					<?php } ?>	
	
				</table>

				<?php
						$idcl = $_SESSION['id3'];
						$conexao = new mysqli("localhost","sispetshop","123456", "petshop"); 	
						if($conexao->connect_errno){
							echo "falha na conexao!";
						}
						$sql = "SELECT p.id as id, p.nome, p.preco as preco, p.imagem as imagem, cr.quantidade as quantidade FROM produtos as p, compras as cr WHERE '$idcl' = cr.user_id AND cr.produto_id = p.id AND situacao = 2 ORDER BY cr.updated_at";
						$soma = 0;
						$resultado = $conexao->query($sql);
						while($linha = $resultado->fetch_assoc()){
							$soma += ($linha["preco"] * $linha["quantidade"]);
						}

						?>
					        <h1>Total (R$): <?php echo $soma ; ?></h1>
						<form action="clientepag.php" method="post" id ="form1">
							<p><input type="submit" value="Voltar"></p>
						</form>

					<?php ?>	
			</div>
			<div id="carrinho"> 
				&nbsp&nbsp&nbsp<img src="files/images/promocao.jpg" alt="Promocao" style="width:280px;height:371px;>
			
			</div>	
				



			</div>
			
			<div id="space3"><p></p> </div>
		</div>
	</div>


</body>
<script src="files/scripts.js"></script>
</html>