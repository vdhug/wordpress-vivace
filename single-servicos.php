
<?php
// Template Name: Single Serviços
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="servicos-interno" >
		<div class="servico-imagem imagem-background" style="background-image: url('<?php the_field('foto_servico'); ?>');" alt=""></div>
		<h1 class="servico-titulo"><?php the_title(); ?></h1>
		
		<div class="container">
			<?php the_field('texto_servico'); ?>
		</div>

	</section>

	<?php include(TEMPLATEPATH . "/inc/orcamento.php"); ?>

<?php endwhile; else: endif; ?>





<?php get_footer(); ?>


