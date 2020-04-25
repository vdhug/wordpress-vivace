<section class="orcamento">
	<div class="container">
		<h2 class="subtitulo">Orçamento</h2>
		<form id="form_orcamento" class="grid-10 form " method="POST" action="./enviar.php">
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
			<textarea id="mensagem" name="mensagem" required placeholder="Descreva o serviço que você precisa"></textarea>
			<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button> 

		</form>
	</div>
</section>
