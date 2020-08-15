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
			<a class="button modal-trigger" value="1"  data-modal="modal-medicao"name="Botao" href="cadastrarProduto"> Adicionar </a>
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
			<a class="button modal-trigger" value="1"  data-modal="modal-grupo"name="Botao" href="cadastrarProduto"> Adicionar </a>
			</div>

			<div class="col-12">
			<h4> Descrição do produto: </h4>

			<textarea name="descricao_produto" id="descricao_produto" placeholder="Descrição" rows="6"></textarea>
			</div>

			</div>
			
		
			<button class="button" value="1" name="Botao" type="submit" style="float: right;margin-top: 20px; "> Salvar</button>
<br>
			</form>  
		</div>
	</session> 
</div>

<!-- Modal -->
<div class="modal" id="modal-medicao">
  <div class="modal-sandbox"></div>
 	<div class="modal-box">
   		<div class="modal-header">
     		 <div class="close-modal">&#10006;</div> 
      		<h1>Cadastrar tipo de Medição</h1>
    	</div>
    	<div class="modal-body">
			<div>
			<form method="POST" action="../../system/app/produto.php">
			<div>
				<input type="hidden" name="cadastrar_medicao" value="1" > 
				<div class="row gtr-uniform">
					<div class="col-6 col-12-xsmall">
						<h4> Código: </h4>
						<input type="text" name="CODIGO" id="codigo" value="" placeholder="Código" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4> Nome da Medição: </h4>
						<input type="text" name="MEDICAO" id="MEDICAO" value="" placeholder="Medição" />
					</div>

					<div class="col-6 col-12-xsmall">
						<h4> Casas Decimais: </h4>
						<select name="tipo_medicao" id="demo-category">
							<option value="">- Selecione as casas Decimais -</option>
							<option value="1">Manufacturing</option>
							<option value="1">Shipping</option>
							<option value="1">Administration</option>
							<option value="1">Human Resources</option>
						</select>
				
					</div>

					<div class="col-6 col-12-xsmall">
						<h4> Descrição da medição: </h4>

						<textarea name="descricao_produto" id="descricao_produto" placeholder="Descrição" rows="1"></textarea>
					</div>

				</div>
		
				<button class="button" value="1" name="Botao" type="submit" style="float: right;margin-top: 20px; "> Salvar</button>
			</div>
			</form>
		</div>		
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal" id="modal-grupo">
  <div class="modal-sandbox"></div>
    <div class="modal-box">
   		<div class="modal-header">
     		 <div class="close-modal">&#10006;</div> 
      		<h1>Cadastrar Grupo</h1>
    	</div>
    	<div class="modal-body">
			<div>
			<form method="POST" action="../../system/app/produto.php">
			<div>
				<input type="hidden" name="cadastrar_grupo" value="1" > 
				<div class="row gtr-uniform">
					<div class="col-6 col-12-xsmall">
						<h4> Código: </h4>
						<input type="text" name="CODIGO" id="codigo" value="" placeholder="Código" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4> Nome do Grupo: </h4>
						<input type="text" name="GRUPO" id="GRUPO" value="" placeholder="Grupo" />
					</div>

					<div class="col-12 col-12-xsmall">
						<h4> Descrição do grupo: </h4>

						<textarea name="descricao_produto" id="descricao_produto" placeholder="Descrição" rows="3"></textarea>
					</div>

				</div>
		
				<button class="button" value="1" name="Botao" type="submit" style="float: right;margin-top: 20px; "> Salvar</button>
			</div>
			</form>
		</div>		
    </div>
  </div>
</div>

