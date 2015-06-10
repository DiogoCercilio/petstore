	<?php include "includes/header.php"; ?>	
	<?php include "includes/aside.php"; ?>	

		<section class="right">
			<div class="dog-pic-large-wrapper">
			<img src="#" alt="" class="large">	
				<br><br>
			<?php foreach($dogs->listaDogDetailImage( $_GET['id'] ) as $dog): ?>
				<img class="thumb-dog" src="assets/upload/thumb/<?= $dog['foto']; ?>" alt="">
			<?php endforeach; ?>
				<!-- < ?php echo $dogs->listaDogDetailImage( $_GET['id'] ); ?> -->
			</div>

			<div class="dog-description-wrapper">
				<?php $dogs->listaDogDetail( $_GET['id'] ); ?>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, possimus.</p>
				<ul>
					<li>Lorem ipsum dolor.</li>
					<li>Ut, commodi, in!</li>
					<li>Repellat, voluptatibus, quod.</li>
					<li>Voluptate, hic, quae.</li>
				</ul>
				<br>
				<button class="btn btn-success">Comprar</button>	
			</div>
		</section>
		
	<?php include "includes/footer.php"; ?>	

	<script>
	$(function(){
		$('img.thumb-dog').each(function(){
			$(this).on('click', function(){
				var src = $(this).attr('src');
				$('img.large').attr('src',src);
			});
		});
		$('img.thumb-dog').eq(0).trigger('click');
	});	
	</script>