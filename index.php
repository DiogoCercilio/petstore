	<?php include "includes/header.php"; ?>	
	<?php include "includes/aside.php"; ?>	

		<section class="right">
			<div class="slider"><img src="http://placehold.it/1000X200&text=Slider" alt=""></div>
			<h1>Welcome to The Dogs. Your best Shop Online!</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, sapiente, odit! Accusamus veniam similique aliquam excepturi dignissimos neque quam quaerat.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut deleniti impedit consectetur voluptatem reprehenderit incidunt corporis architecto quisquam doloribus quaerat enim amet optio dicta nisi iusto, qui expedita, dolorem eos consequatur adipisci nobis dolore quam minus. Reprehenderit saepe, omnis fugit.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia saepe dolore optio, atque earum autem vitae magni aut reprehenderit ad culpa doloribus, cupiditate soluta, vel quam. Rem, quaerat fugit laborum unde eveniet. Nulla, dignissimos ipsum delectus eos, sed architecto voluptatibus possimus ex ut blanditiis, deleniti! Ducimus soluta qui necessitatibus aut voluptatum tempore, aperiam natus dolor maiores, nihil doloremque assumenda?</p>

			<h4>Raças Mais Buscadas:</h4>
			<?php foreach($dogs->listaRacas(1) as $dog): ?>
				<div class="box">
					<a href="listaDogs.php?category=<?= $dog['id']; ?>">
						<img src="assets/upload/capa/<?= utf8_encode($dog['capa']); ?>" alt="">
					</a>
					<h5><?= utf8_encode($dog['raca']); ?></h5>
				</div>
			<?php endforeach; ?>

			<?php foreach($dogs->listaRacas(5) as $dog): ?>
				<div class="box">
					<a href="listaDogs.php?category=<?= $dog['id']; ?>">
						<img src="assets/upload/capa/<?= utf8_encode($dog['capa']); ?>" alt="">
					</a>
					<h5><?= utf8_encode($dog['raca']); ?></h5>
				</div>
			<?php endforeach; ?>	

			<?php foreach($dogs->listaRacas(6) as $dog): ?>
				<div class="box">
					<a href="listaDogs.php?category=<?= $dog['id']; ?>">
						<img src="assets/upload/capa/<?= utf8_encode($dog['capa']); ?>" alt="">
					</a>
					<h5><?= utf8_encode($dog['raca']); ?></h5>
				</div>
			<?php endforeach; ?>					
			<div class="clear"></div>			
			<a class="btn btn-primary" href="categorias.php">Veja todas as Categorias de Cachorros</a>
		</section>

		<footer>
			
		</footer>
	</section>
</body>
</html>