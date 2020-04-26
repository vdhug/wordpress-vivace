<?php
// Template Name: Home
?>

<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="slider">
		<img src="<?php the_field('slider_home'); ?>" alt="">
	</section>

	<section class="container sobre" >
		<div class="sobre-imagem" style="background-image: url('<?php the_field('imagem_sobre_home'); ?>');" alt="" ></div>
		<div class="conteudo">
			<h1 class="titulo"><?php the_field('titulo_sobre_home'); ?></h1>
			<p class="texto"><?php the_field('texto_sobre_home'); ?></p>
		</div>
	</section>


<section class="estatisticas">
	<ul>
		<?php if(have_rows('estatisticas')): while(have_rows('estatisticas')) : the_row(); ?>
			<li class="estatistica">
				<img class="estatistica-icone" src="<?php the_sub_field('imagem_estatisticas'); ?>" alt="">
				<div class="estatistica-descricao">
					<span class="estatistica-titulo"><?php the_sub_field('valor_estatisticas'); ?></span>
					<p class="descricao"><?php the_sub_field('descricao_estatistica'); ?></p>
				</div>
			</li>
		<?php endwhile; else : endif; ?>

	</ul>
</section>

<section class="container politicas">
	<h1 class="titulo"><?php the_field('titulo_politicas'); ?></h1>
	<p class="texto"><?php the_field('texto_politicas'); ?></p>
	<div class="politicas-painel">
		<ul>
			<?php if(have_rows('politicas')): while(have_rows('politicas')) : the_row(); ?>
				<li class="politica">
					<img src="<?php the_sub_field('imagem_politicas'); ?>" alt="">
					<div class="politica-descricao">
						<span><?php the_sub_field('subtitulo_politicas'); ?></span>
						<p class="descricao"><?php the_sub_field('descricao_politicas'); ?></p>
					</div>
				</li>
			<?php endwhile; else : endif; ?>
		</ul>

		<img class="politicas-imagem" src="" alt="">
	</div>

</section>

<section class="clientes">
	<h1 class="titulo"><?php the_field('clientes_home_titulo'); ?></h1>
	<ul>
		<?php if(have_rows('clientes_home')): while(have_rows('clientes_home')) : the_row(); ?>
			<li>
				<img src="<?php the_sub_field('clientes_imagem'); ?>" alt="">
			</li>
		<?php endwhile; else : endif; ?>
	</ul>   
</section>

<section class="container servicos-principal">
	<h1 class="titulo"><?php the_field('servicos_home_titulo'); ?></h1>
	<p class="texto">
		<?php the_field('servicos_home_texto'); ?>
	</p>
	<ul class="servicos-lista-principal">

		<?php
			$args = array (
				'post_type' => 'servicos',
				'order'   => 'ASC',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query ( $args );
		?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li class="servico-principal">
					<img src="<?php the_field('foto_servico'); ?>" alt="<?php the_title(); ?>">
					<span><?php the_title(); ?></span>
					<p class="descricao"><?php the_field('resumo_servico'); ?></p>
					<a class="btn" href="<?php the_permalink(); ?>">Saiba mais</a>
				</li>
			<?php endwhile; else : endif; ?>
		<?php wp_reset_query(); wp_reset_postdata(); ?>

	<ul>
</section>

		<section class="principal-produto">
			<p>
				Reduza até <span>95%</span> na sua conta de luz!
			</p>
			<div>
				<a class="btn" href="#">Na sua casa</a>
				<a class="btn" href="#">Na sua empresa</a>
			</div>
		</section>

		<section class="container contato-principal">
			<h1 class="titulo"><?php the_field('titulo_contato_home'); ?></h1>
			<p class="texto"><?php the_field('texto_contato_home'); ?></p>
			<ul class="passos">
				<?php if(have_rows('contato_home')): while(have_rows('contato_home')) : the_row(); ?>
					<li>
						<img src="<?php the_sub_field('imagem_contato'); ?>" alt="">
						<div class="passos-descricao">
							<span><?php the_sub_field('texto_contato'); ?></span>
							<p class="descricao"><?php the_sub_field('descricao_contato'); ?></p>
						</div>
					</li>
				<?php endwhile; else : endif; ?>
			</ul>
		</section>

	<?php endwhile; else: endif; ?>

	<?php get_footer(); ?>


</body>
</html>