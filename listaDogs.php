	<?php include "includes/header.php"; ?>	
	<?php include "includes/aside.php"; ?>	

		<section class="right">
			<?php foreach($dogs->listaRacas( $_GET['category']  ) as $dog): ?>
				<h3>Veja todos os Cachorros da Raça <?= utf8_encode($dog['raca']); ?></h3>
			<?php endforeach; ?>

			<?php foreach($dogs->listaRacasPorCategoria( $_GET['category'] ) as $dog): ?>
				<div class="box">
					<a href="dog-detail.php?id=<?= $dog['id']; ?>">
						<img src="assets/upload/thumb/<?= utf8_encode($dog['thumb']); ?>" alt="">
						<h4><?= utf8_encode($dog['nome']); ?></h4>
						<button class="btn btn-warning">+ Detalhes</button>						
					</a>
						<button class="btn btn-success" onclick="alert('Você comprou esse item.. Mas ainda não fiz esse método...');">Comprar</button>						
				</div>
			<?php endforeach; ?>
			<div class="clear"></div>			
			<a class="btn btn-primary" href="categorias.php">Ver todas as Raças</a>
		</section>

		<footer>
			
		</footer>
	</section>
</body>
</html>