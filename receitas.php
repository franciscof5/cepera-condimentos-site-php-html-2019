<?php require_once("header.php"); ?>
<?php require_once("navbar.php"); ?>

<main role="main">

	<div style="background: url('images/bgs/receitas_bg_topo.jpg') no-repeat #fffee7;background-size: contain;">
		<br clear="p-4">

		<div class="separator_hight text-center">|</div>
		<h2 class="trashhandregular verde-oliva text-center h1 p-4">Receitas</h2>
		<br clear="p-4">

		<div class="p-4">
			<div class="embed-responsive embed-responsive-16by9 p-4">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tWLEYFSyedI" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row p-4">
			<div class="col-md-2"><img src="images/produtos/produto_example.png" class="responsive width100"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-5">
						<h4 class="orange2 uppercase bold">Filet ao Molho Madeira</h4>
						<ul class="list-unstyled">
							<li>1 porção</li>
							<li>20 min</li>
						</ul>
					</div>

					<div class="col-md-4">Compartilhe</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<h6 class="bold uppercase verde-oliva">Ingredientes</h6>
						<ul style="padding-left: 16px;">
							<li>1 kg de filét mignon cortado em medalhões</li>
							<li>1 cebola</li>
							<li>1 batata</li>
							<li>Mostarda Cepêra</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h6 class="bold uppercase verde-oliva">Modo de preparo</h6>
						<p>Grelhar os medalhões na manteiga...</p>
					</div>
				</div>
			</div>
		</div>
		<?php require_once("assine_newsletter.php"); ?>
		<!--a href="receitas_inside.php"><img src="images/bgs/receitas_inside_bg.jpg" class="responsive width100"></a-->
	</div>

</main>

<?php require_once("footer.php"); ?>