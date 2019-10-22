<?php require_once("header.php"); ?>
<?php require_once("navbar.php"); ?>

<main role="main" class="bg-amarelo-claro contato trabalhe-conosco" style="background-image: url(images/bgs/background_trabalheconosco.png);">

	<div class="main-title">
		<span class="title-before bg-verde-oliva"></span>
		<h1 class="trashhandregular verde-oliva text-center h1 py-4 borda-triangulo">Trabalhe conosco</h1>
		<span class="title-after bg-verde-oliva"></span>
	</div>

	<div class="main-content">
		
		<div class="row">
			<div class="col-12 text-center effrabold verde-oliva">
				<p>GOSTARIA DE fazer parte da nossa equipe?<br>
					Preencha o formulário abaixo<br>
					e entraremos em contato com você.</p>
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
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<select type="text" name="" class="form-control">
								<option value="">Cargo</option>
							</select>
						</div>
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
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="* Data de nascimento">
								</div>	
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<button class="btn btn-primary btn-block btn-anexar">* Anexar currículo</button>
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