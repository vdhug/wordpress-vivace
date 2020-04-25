<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

	<section class="contato-interno container">
		<form method="POST" action="./enviar.php" class="grid-8 contato_form">
			<label for="nome">Nome</label>
			<input type="text" id="nome" name="nome" required placeholder="Seu Nome">
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email" required placeholder="Seu E-mail">
			<label for="telefone">Telefone</label>
			<input type="text" id="telefone" name="telefone" placeholder="Seu Telefone">

			<label class="nao-aparece"> Se você não é um robô, deixe em branco.</label>
			<input type="text" name="leaveblank" class="nao-aparece">
			<label class="nao-aparece"> Se você não é um robô, não mude este campo.</label>
			<input type="text" name="dontchange" class="nao-aparece" value="http://">

			<label for="mensagem">Mensagem</label>
			<textarea id="mensagem" name="mensagem" required placeholder="Sua Mensagem"></textarea>
			<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button> 
		</form>

		<div class="contato_dados grid-8">
			<h3><?php the_field('titulo_dados'); ?></h3>
			<span><?php the_field('telefone'); ?></span>
			<span><?php the_field('email'); ?></span>
			<span><?php the_field('endereco'); ?></span>
			
			<h3><?php the_field('titulo_redes_sociais'); ?></h3>
			<ul>
				<?php if(have_rows('redes_sociais')): while(have_rows('redes_sociais')) : the_row(); ?>
					<li><a href="<?php the_sub_field('link_redes'); ?>" target="_blank"><img src="<?php the_sub_field('imagem_redes'); ?>" alt="<?php the_sub_field('legenda_redes'); ?>"></a></li>
				<?php endwhile; else : endif; ?>
			</ul>
		</div>
	</section>
<?php endwhile; else: endif; ?>





<?php get_footer(); ?>
















































































</section>


</body>
</html>