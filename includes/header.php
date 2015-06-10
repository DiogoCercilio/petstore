<?php include "classes/controller/index.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>The Dogs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
</head>
<body>
<section class="wrapper">
	<header class="top-principal">
		<div class="logo">
			<a href="index.php">	
				<h2>The Dogs</h2>
				<h6>Your PetShop Online</h6>
			</a>
		</div>

		<section class="top-principal-details">
			<section class="cart">
				<h5>Carrinho de Compras:</h5>
				<p>Seu Carrinho está vazio.</p>
			</section>
			<section class="search">
				<h5>Encontre seu cãozinho aqui!</h5>				
			
			<form class="form-inline" action="search.php" action="post">
			    <input type="text" class="form-control" name="search_dog" placeholder="Ex. Vira Lata">
			  <button type="submit" class="btn btn-primary">Procurar</button>
			</form>

			</section>
		</section>

		<div class="clear"></div>
	</header>
	<menu class="list-categories">
		<ul>
			<li><a href="index.php">Página Inicial</a></li>
			<li><a href="categorias.php">Raças</a></li>
			<li><a href="checkout.php">Finalizar Compra</a></li>
			<li><a href="carrinho.php">Carrinho de Compras</a></li>
		</ul>
	</menu>