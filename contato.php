<?php require_once("header.php"); ?>
<?php require_once("navbar.php"); ?>

<main role="main" class="bg-amarelo-claro contato" style="background-image: url(images/bgs/background_contato.png);">

	<div class="main-title">
		<span class="title-before bg-verde-oliva"></span>
		<h1 class="trashhandregular verde-oliva text-center h1 pt-4 pb-3 borda-colchete">Contato</h1>
		<span class="title-after bg-verde-oliva"></span>
	</div>

	<div class="main-content">
		
		<div class="row">
			<div class="col-12 text-center effrabold verde-oliva">
				<p>Entre em contato<br>
				para descobrir como podemos oferecer<br>
				um produto que atenda às suas necessidades<br>
				e que torna seu dia mais gostoso.</p>
			</div>
			<div class="col-12 text-center py-5">
				<p class="social">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</p>
			</div>
		</div>

		<form class="form bg-branco" method="POST">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 pb-4">
						<h2 class="trashhandregular verde-oliva">Olá, bem vindo(a)</h2>
						<h3 class="effrabold azul">A área de contato com a Cepêra</h3>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="* Nome completo">
						</div>
						<div class="form-group">
							<input type="email" name="" class="form-control" placeholder="* E-mail">
						</div>
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="* Telefone">
								</div>	
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="* Celular">
								</div>	
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="* Endereco">
						</div>
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="Departamento">
								</div>	
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="Assunto">
								</div>	
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<textarea class="form-control" placeholder="* Mensagem"></textarea>
						<label class="mt-2">* Campos obrigatórios</label>
						<button class="btn btn-primary float-right btn-enviar">Enviar</button>
					</div>
				</div>
			</div>
		</form>
	</div>

</main>

<?php require_once("footer.php"); ?>