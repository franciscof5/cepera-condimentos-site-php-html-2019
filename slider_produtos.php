<div style="background-color: #175522">
	<h2 class="trashhandregular uppercase text-center text-light p-2 borda-sublinhado">Conheça Nossa Linha de Produtos
	<br>
	<img src="images/titulos/sublinhado.svg" style="width: 100%;"></h2>
	<!--h2 class="trashhandregular uppercase text-center text-light p-2 h1 borda-sublinhado">Conheça Nossa Linha de Produtos</h2-->
	<!--div class="" style="width: 40%;margin:0 auto;"></div-->
	<section class="produtoss slider">
		<div>
			<img src="images/categorias/condimentos.png">
			<h6>Condimentos</h6>
		</div>
		<div>
			<img src="images/categorias/conservas.png">
			<h6>Conservas</h6>
		</div>
		<div>
			<img src="images/categorias/derivados-de-tomate.png
">
			<h6 class="twolines">Derivados de Tomate</h6>
		</div>
		<div>
			<img src="images/categorias/frutas-em-calda.png">
			<h6 class="twolines">Frutas em Calda</h6>
		</div>
		<div>
			<img src="images/categorias/molhos-especiais.png">
			<h6 class="twolines">Molhos Especiais</h6>
		</div>
		<div>
			<img src="images/categorias/molhos.png">
			<h6>Molhos</h6>
		</div>
		<div>
			<img src="images/categorias/pimentas.png">
			<h6>Pimentas</h6>
		</div>
	</section>
	
	<div class="paginator-center text-color text-center">
		<a href="#" class="btn button-cepera">VEJA TODOS</a>
		<!--ul>
			<li class="prev"></li>
			<li class="next"></li>
		</ul-->
	</div>

	<script type="text/javascript">
    $(".produtoss").slick({
		dots: true,
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		adaptiveHeight: false,
		responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
      });
	</script>
	<br style="clear: both;margin-bottom: 30px;">
</div>