<?php
// Template Name: Serviços
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

	<section class="servicos-interno" >
		<div class="container">
			<ul class="servicos-lista">

				<?php
				$args = array (
					'post_type' => 'servicos',
					'order'   => 'ASC'
				);
				$the_query = new WP_Query ( $args );
				?>

				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="imagem-background" style="background-image: url('<?php the_field('foto_servico'); ?>');"
								alt="<?php the_title(); ?>">
							</div>
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('resumo_servico'); ?></p>
						</a>
					</li>
				<?php endwhile; else : endif; ?>
				<?php wp_reset_query(); wp_reset_postdata(); ?>
				


			</ul>
		</div>
	</section>

	<?php include(TEMPLATEPATH . "/inc/orcamento.php"); ?>

<?php endwhile; else: endif; ?>


<?php get_footer(); ?>



















































































</section>


</body>
</html>