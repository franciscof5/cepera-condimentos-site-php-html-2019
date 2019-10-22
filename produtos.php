<?php require_once("header.php"); ?>
<?php require_once("navbar.php"); ?>

<main role="main">

	<?php require_once("slider_produtos.php"); ?>
	
	<div class="bg-amarelo-claro">
		<div class="col-md-6 offset-md-3 p-4">
			<br>
			<form id="search-form-inline" style="position: relative;">
				<input class="form-control mr-sm-2 verde-oliva" type="text" placeholder="PESQUISA PRODUTOS" aria-label="Search">
				<!--button class="btn btn-outline-success" type="submit" id="search-button"--><i class="inside-icon fas fa-search"></i><!--/button-->
			</form>
			<br>
		</div>	

		<h2 class="trashhandregular verde-oliva text-center h1 p-2 borda-triangulo">Condimentos</h2>

		<div class="col-md-8 offset-md-2 row">

			<div class="col-md-4 contem-produto">
				<p class="text-center"><img src="images/produtos/produto_example.png" class="responsive" style="width: 80%;"></p>
				<p class="text-center verde-oliva bold"><span class="dotted-bottom">Ketchup 400g</span></p>
				<p class="text-center" style="font-size: 11px;"><a href="#">Informação Nutricional</a> | <a href="#">Nutrientes</a></p>
				<div class="form-group row verde-oliva" style="font-size: 8px;">
					<div class="btn-group btn-group-custom" role="group" aria-label="Basic example">
					  <button type="button" class="btn btn-default">210g</button>
					  <button type="button" class="btn btn-default active">400g</button>
					  <button type="button" class="btn btn-default">1,01kg</button>
					  <button type="button" class="btn btn-default">3,5kg</button>
					  <button type="button" class="btn btn-default">5,5kg</button>
					</div>
				</div>
				<div class="text-center">
					<span class="contem-adicionar">
						<button>1</button><i class="fas fa-lg fa-shopping-basket bg-verde-oliva text-light p-1"></i>
					</span>
				</div>
			</div>

			<div class="col-md-4 contem-produto">
				<div class="contem-tabela">
					<table class="table table-striped">
					<thead>
						<tr>
						  <th>&nbsp;</th>
						  <th>Quantidade por Porção</th>
						  <th>% VD (*)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <td>Valor Energético</td>
						  <td>0 kcal = 0 kj</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Caboidratos</td>
						  <td>0g</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Proteínas</td>
						  <td>0g</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Gorduras Totais</td>
						  <td>0g</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Gorduras Saturadas</td>
						  <td>0g</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Gorduras trans</td>
						  <td>0g</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Fibra Alimentar</td>
						  <td>0g</td>
						  <td>0%</td>
						</tr>
						<tr>
						  <td>Sódio</td>
						  <td>525mg</td>
						  <td>22%</td>
						</tr>
					</tbody>
					</table>
				</div>
				<p class="text-center"><img src="images/produtos/produto_example.png" class="responsive" style="width: 80%;"></p>
				<p class="text-center verde-oliva bold"><span class="dotted-bottom">Ketchup 400g</span></p>
				<p class="text-center" style="font-size: 11px;"><a href="#">Informação Nutricional</a> | <a href="#">Nutrientes</a></p>
				<div class="form-group row verde-oliva" style="font-size: 8px;">
					<div class="btn-group btn-group-custom" role="group" aria-label="Basic example">
					  <button type="button" class="btn btn-default">210g</button>
					  <button type="button" class="btn btn-default active">400g</button>
					  <button type="button" class="btn btn-default">1,01kg</button>
					  <button type="button" class="btn btn-default">3,5kg</button>
					  <button type="button" class="btn btn-default">5,5kg</button>
					</div>
				</div>
				<div class="text-center">
					<span class="contem-adicionar">
						<button>1</button><i class="fas fa-lg fa-shopping-basket bg-verde-oliva text-light p-1"></i>
					</span>
				</div>
			</div>

		</div>
		
		<h2 class="trashhandregular verde-oliva text-center h1 p-2 borda-colchete">Molhos</h2>
		<div class="col-md-8 offset-md-2 row">
			
		</div>
		
		<h2 class="trashhandregular verde-oliva text-center h1 p-2 borda-rolo">Molhos Especiais</h2>
		
		<div class="col-md-8 offset-md-2 row">
		</div>

		<h2 class="trashhandregular verde-oliva text-center h1 p-2 borda-banner">Conservas</h2>
		<div class="col-md-8 offset-md-2 row">
		</div>
		<!--guide-->
		<!--img src="images/bgs/produtos_bg.jpg" class="responsive width100"-->
	</div>

	<?php require_once("assine_newsletter.php"); ?>

</main>

<?php require_once("footer.php"); ?>