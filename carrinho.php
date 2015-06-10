	<?php include "includes/header.php"; ?>	
	<?php include "includes/aside.php"; ?>	

		<section class="right">
			<h1>Carrinho</h1>
			<?php 
				session_start();
				if( isset($_SESSION['compra']) ):

				else:
			?>
				<h4>Seu Carrinho de Compras está vazio</h4>
				<a class="btn btn-primary" href="index.php">Continuar Comprando</a>
			<?php 
				endif;
			?>
			<div class="clear"></div>
		</section>

		<footer>
			
		</footer>
	</section>
</body>
</html>