<?php require_once("header.php"); ?>
<div class="bg-mostarda">
	<?php require_once("navbar.php"); ?>
</div>

<main role="main">

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div id="home_mostarda">
		<div class="container">
			<h3 class="h-branco">Conheca Nossa Linha de Mostardas</h3>
				<p class="mostarda-escuro">This is a template for a simple marketing or informational website. It includes a large callout.<br>
				<button class="button-verde-oliva">Comprar</button>
				</p>
				
		</div>	
		
		<img src="images/bgs/home_mostarda.jpg" class="responsive width100">
	</div>

	<?php require_once("slider_produtos.php"); ?>

	<div class="jumbotron bg-cover no-border-radius" style="background:url('images/bgs/home_vegetais.jpg') no-repeat;">
		<div class="container">
			<div class="col-md-6 offset-md-5 col-lg-6 offset-lg-4 offset-sm-0 col-sm-12 bg-amarelo p-4" style="margin-top:260px;">
				<h2 class="trashhandregular orange">Lore Ipsum</h2>
				<p class="verde-oliva"><strong>Lore ipsum adal dja lksjd alkdj lkajd lkajsdl kasjd lkasjd lkaj sdlakd jlkasj dlkajd akls</strong></p><p class="verde-oliva">LJdlakjds aLdj aldj aldjalsdjalks</p>
			</div>
			
			<div class="col-md-6 offset-md-2 col-lg-6 offset-lg-2 offset-sm-0 col-sm-12 bg-amarelo p-4" style="margin-top:300px; margin-bottom:400px;">
				<h2 class="trashhandregular orange">Lore Ipsum</h2>
				<p class="verde-oliva"><strong>Lore ipsum adal dja lksjd alkdj lkajd lkajsdl kasjd lkasjd lkaj sdlakd jlkasj dlkajd akls</strong></p><p class="verde-oliva">LJdlakjds aLdj aldj aldjalsdjalks</p>
			</div>
		</div>
	</div>

	<div>
		<a href="receitas.php"><img src="images/bgs/home_receitas.jpg" class="responsive width100"></a>
	</div>


	<?php require_once("assine_newsletter.php"); ?>

</main>

<?php require_once("footer.php"); ?>