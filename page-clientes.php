<?php
// Template Name: Clientes
?>


<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
	
	<section class="container clientes-interno" >

		<?php if(have_rows('clientes')): while(have_rows('clientes')) : the_row(); ?>
		<div class="cliente">
			<img class="cliente-imagem" src="<?php the_sub_field('imagem_cliente'); ?>" alt="<?php the_sub_field('legenda_imagem'); ?>">
			<div>
				<label class="cliente-nome"> <?php the_sub_field('titulo_cliente'); ?></label>
				<p class="texto cliente-descricao"><?php the_sub_field('texto_cliente'); ?></p>
			</div>
		</div>
		<?php endwhile; else : endif; ?>

		
	</section>
	<?php endwhile; else: endif; ?>


	  <?php get_footer(); ?>

















































































</section>


</body>
</html>