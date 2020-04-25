<?php
// Template Name: Sobre
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

	<section class="sobre-vivace container">
		<div class="grid-7">
			<h2 class="subtitulo-interno"><?php the_field('titulo_sobre'); ?> </h2>
			<?php the_field('texto_sobre'); ?>
			

		</div>

		<div class="grid-9">
			<h2 class="subtitulo-interno"><?php the_field('titulo_imagem'); ?> </h2>
			<img src="<?php the_field('imagem'); ?>" alt="<?php the_field('legenda_imagem'); ?>">
		</div>
	</section>


	<section class="valores">
		<div class="container">
			<ul class="valores-lista">
				<?php if(have_rows('valores')): while(have_rows('valores')) : the_row(); ?>
					<li class="grid-1-3">
						
						<h3><?php the_sub_field('valor_titulo'); ?></h3>
						
						<?php the_sub_field('valor_texto'); ?>
					</li>
				<?php endwhile; else : endif; ?>

			</ul>

			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('imagem_equipe'); ?>" alt="<?php the_field('legenda_imagem_equipe'); ?>">
				
			</div>
		</div>
		

	</section>
<?php endwhile; else: endif; ?>




<?php get_footer(); ?>






















































































</section>


</body>
</html>