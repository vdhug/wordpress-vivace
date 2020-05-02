<section class="orcamento">
	<div class="container">
		<h2 class="subtitulo ">Orçamento</h2>
		<div class="painel-contato">
			<form id="form_orcamento" class="form " method="POST" action="./enviar.php">
				<label for="nome">Nome</label>
				<input class="texto" type="text" id="nome" name="nome" required placeholder="Seu Nome">
				<label for="email">E-mail</label>
				<input class="texto" type="email" id="email" name="email" required placeholder="Seu E-mail">
				<label for="telefone">Telefone</label>
				<input class="texto" type="text" id="telefone" name="telefone" placeholder="Seu Telefone">

				<label class="nao-aparece"> Se você não é um robô, deixe em branco.</label>
				<input type="text" name="leaveblank" class="nao-aparece">
				<label class="nao-aparece"> Se você não é um robô, não mude este campo.</label>
				<input type="text" name="dontchange" class="nao-aparece" value="http://">

				<label for="mensagem">Mensagem</label>
				<textarea class="texto" id="mensagem" rows="5" name="mensagem" required placeholder="Descreva o serviço que você precisa"></textarea>
				<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button> 
			</form>

			<div class="contato-info">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/email.svg" alt="">
				<label for="email">Email</label>
				<a href="mailto:contato@vivace.com">contato@vivace.com</a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefone.svg" alt="">
				<label for="telefone">Telefone</label>
				<a href="tel:+5568999999999">99999-9999</a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/endereco.svg" alt="">
				<label for="endereco">Endereço</label>
				<p class="texto">Rio Branco - Acre - Brazil</p>
			</div>

		</div>
		
	</div>
</section>
