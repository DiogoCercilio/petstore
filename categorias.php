	<?php include "includes/header.php"; ?>	
	<?php include "includes/aside.php"; ?>	

		<section class="right">
			<h3>Todas as Raças:</h3>
			<?php foreach($dogs->listaRacas() as $dog): ?>
				<div class="box">
					<a href="listaDogs.php?category=<?= $dog['id']; ?>">
						<img src="assets/upload/capa/<?= utf8_encode($dog['capa']); ?>" alt="">
						<h4><?= utf8_encode($dog['raca']); ?></h4>
						<p>Veja todos os cães</p>
					</a>
				</div>
			<?php endforeach; ?>
			<div class="clear"></div>
		</section>

		<footer>
			
		</footer>
	</section>
</body>
</html>