<?php
// Template Name: Sobre
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="container sobre-vivace">
		<div>
			<h2 class="subtitulo-interno"><?php the_field('titulo_sobre'); ?> </h2>
			<p class="texto">
				<?php the_field('texto_sobre'); ?>
			</p>
		</div>
		<div style="background-image: url('<?php the_field('imagem'); ?>');"alt="<?php the_field('legenda_imagem'); ?>"></div>
	
	</section>


	<section class="container valores">
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
	</section>
<?php endwhile; else: endif; ?>




<?php get_footer(); ?>






















































































</section>


</body>
</html>