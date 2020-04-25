<?php
// Template Name: Clientes
?>


<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
	
	<section class="container clientes-interno" >

		<?php if(have_rows('clientes')): while(have_rows('clientes')) : the_row(); ?>
		<h2 class="subtitulo-interno-clientes"> <?php the_sub_field('titulo_cliente'); ?> </h2>
		<div class="grid-6">
			<img src="<?php the_sub_field('imagem_cliente'); ?>" alt="<?php the_sub_field('legenda_imagem'); ?>">
		</div>
		<div class="grid-10">
<?php the_sub_field('texto_cliente'); ?>

		</div>
		<?php endwhile; else : endif; ?>

		
	</section>
	<?php endwhile; else: endif; ?>


	  <?php get_footer(); ?>

















































































</section>


</body>
</html>