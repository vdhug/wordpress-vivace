<?php $contato = get_page_by_title('contato'); ?>

<footer class="footer">
				<div class="footer-historia">
					<h3 class="footer-titulo"><?php the_field('titulo_historia' , $contato); ?></h3>
					<p class="descricao"><?php the_field('resumo_historia' , $contato); ?></p>
				</div>
				<ul class="footer-contato">
					<h3 class="footer-titulo"><?php the_field('titulo_contato', $contato); ?></h3>
					<li class="descricao"><?php the_field('telefone' , $contato); ?></li>
					<li class="descricao"><a href="mailto:sac@engenhariavivace.com"><?php the_field('email' , $contato); ?></a>   </li>
					<li class="descricao"><?php the_field('endereco', $contato); ?></li>
				</ul>

				<ul>
					<h3 class="footer-titulo"><?php the_field('titulo_redes_sociais' , $contato); ?></h3>
					<ul>
						<?php if(have_rows('redes_sociais_rodape' , $contato)): while(have_rows('redes_sociais_rodape' , $contato)) : the_row(); ?>

						<li class="descricao teste"><a href="<?php the_sub_field('link_redes_rodape' , $contato); ?>" target="_blank"><img src="<?php the_sub_field('imagem_redes_rodape' , $contato); ?>" alt="<?php the_sub_field('legenda_redes_rodape' , $contato); ?>"></a></li>
						<?php endwhile; else : endif; ?>
						
					</ul>
				</ul>
			</footer>
			<p class="copyrigth">© Vivace Engenharia LTDA - Alguns direitos reservados.</p>

			<?php wp_footer(); ?>

		</body>
		</html>
