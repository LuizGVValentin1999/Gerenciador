<!-- Wrapper -->
<div id="wrapper">
	<!-- Main -->
	<section class="wrapper">
		<div class="inner">

			<form method="POST" action="../../system/app/produto.php">
	<div>
	<input type="hidden" name="cadastrar" value="1" > 

	<thead>
		<tr>
			<h2>Adicionar produtos</h2>
		</tr>
	</thead>
		<div class="row gtr-uniform">
			<div class="col-6 col-12-xsmall">
				<h4> Código: </h4>
				<input type="text" name="codigo" id="codigo" value="" placeholder="Código" />
			</div>
			<div class="col-6 col-12-xsmall">
				<h4> Nome do produto: </h4>
				<input type="text" name="produto" id="produto" value="" placeholder="Produto" />
			</div>

			<div class="col-4 col-12-xsmall">
				<h4> Tipo de medição: </h4>
				<select name="tipo_medicao" id="demo-category">
													<option value="">- Selecione o tipo de medição -</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
				
			</div>

			<div class="col-2 col-12-xsmall">
				<br>
			<a class="button" value="1" name="Botao" href="cadastrarProduto"> Adicionar </a>
			</div>

			<div class="col-4 col-12-xsmall">
				<h4> Grupo: </h4>
				<select name="selecao_grupo" id="grupo">
													<option value="">- Selecione o grupo -</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
				</select>
				
			</div>

			<div class="col-2 col-12-xsmall">
			<br>
			<a class="button" value="1" name="Botao" href="cadastrarProduto"> Adicionar </a>
			</div>

			<div class="col-12">
			<h4> Descrição do produto: </h4>

			<textarea name="descricao_produto" id="descricao_produto" placeholder="Descrição" rows="6"></textarea>
			</div>

			</div>
			
		
			<button class="button" value="1" name="Botao" type="submit" style="float: right;margin-top: 20px; "> Salvar</button>

			</form>  
		</div>
	</session> 
</div>
