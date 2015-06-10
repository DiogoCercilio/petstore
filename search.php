	<?php include "includes/header.php"; ?>	
	<?php include "includes/aside.php"; ?>	

		<section class="right">
			<?php 

				if( isset($_POST['search_dog']) && !empty($_POST['search_dog']) ):

						echo "<h1>Resultados da sua busca:</h1>";
						foreach($dogs->findDog( $_POST['search_dog'] ) as $dog): ?>
							<div class="box">
								<a href="listaDogs.php?category=<?= $dog['id']; ?>">
									<img src="assets/upload/capa/<?= utf8_encode($dog['capa']); ?>" alt="">
								</a>
								<h2><?= utf8_encode($dog['raca']); ?></h2>
							</div>
						<?php endforeach;
					else:
						echo "<h4>Digite algo na caixa de busca</h4>";
				endif;
			?>
			<div class="clear"></div>

			<a class="btn btn-primary" href="categorias.php">Ver todas as Raças</a>
		</section>

		<footer>
			
		</footer>
	</section>
</body>
</html>