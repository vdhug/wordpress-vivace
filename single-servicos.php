
<?php
// Template Name: Single Serviços
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



	<section class="container servicos-interno" >
		
		<h2 class="subtitulo-interno-servicos"><?php the_title(); ?></h2>
		<div class="grid-6">
			<img src="<?php the_field('foto_servico'); ?>" alt="<?php the_title(); ?>">
		</div>
		<div class="grid-10">

			<?php the_field('texto_servico'); ?>
			
		</div>

	</section>

	<?php include(TEMPLATEPATH . "/inc/orcamento.php"); ?>

<?php endwhile; else: endif; ?>





<?php get_footer(); ?>


