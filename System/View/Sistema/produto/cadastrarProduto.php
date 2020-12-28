<?php
include('System/Checker/conection.php');
echo @$_SESSION['msg'];
unset($_SESSION['msg']);
?><!-- Wrapper -->
<div id="wrapper">
	<!-- Main -->
	<section class="wrapper">
		<div class="inner center">

			<form method="POST" action="../../system/app/produto.php">
				<div>
					<input type="hidden" name="funcao" value="cadastrar">

					<thead>
						<tr>
							<h2>Adicionar produtos</h2>
						</tr>
					</thead>
					<div class="row gtr-uniform">
						<div class="col-6 col-12-xsmall">
							<h4> Código: </h4>
							<input type="text" name="CODIGO" id="CODIGO_PRODUTO" value="" required placeholder="Código" />
						</div>
						<div class="col-6 col-12-xsmall">
							<h4> Nome do produto: </h4>
							<input type="text" name="NOME" id="NOME_PRODUTO" value="" required placeholder="Produto" />
						</div>

						<div class="col-4 col-12-xsmall">
							<h4> Tipo de medição: </h4>
							<select required name="TIPO_DE_MEDICAO" id="TIPO_DE_MEDICAO_PRODUTO">
								<option value="" hidden>- Selecione o tipo de medição -</option>
								<?php
								$query = "SELECT * FROM tipo_de_medicao ";
								$result = mysqli_query($con, $query);
								while(@$linha=mysqli_fetch_array($result)){
								?>
								<option value="<?=$linha['ID']?>"><?=$linha['ABREVIACAO'].'-'.$linha['NOME']?></option>
								<?php } ?>
							</select>

						</div>

						<div class="col-2 col-12-xsmall">
							<br>
							<a class="button modal-trigger" value="1" data-modal="modal-medicao" name="Botao" href="cadastrarProduto"> Adicionar </a>
						</div>

						<div class="col-4 col-12-xsmall">
							<h4> Grupo: </h4>
							<select required name="GRUPO" id="GRUPO_PRODUTO">
								<option value="" hidden>- Selecione o grupo -</option>
								<?php
								$query = "SELECT * FROM produto_grupo ";
								$result = mysqli_query($con, $query);
								while(@$linha=mysqli_fetch_array($result)){
								?>
								<option value="<?=$linha['ID']?>"><?=$linha['CODIGO'].'-'.$linha['NOME']?></option>
								<?php } ?>
							</select>

						</div>

						<div class="col-2 col-12-xsmall">
							<br>
							<a class="button modal-trigger" value="1" data-modal="modal-grupo" name="Botao" href="cadastrarProduto"> Adicionar </a>
						</div>

						<div class="col-12">
							<h4> Descrição do produto: </h4>

							<textarea name="DESCRICAO" id="descricao_produto" placeholder="Descrição" rows="6"></textarea>
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
						<input type="hidden" name="funcao" value="cadastrar_medicao">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall">
								<h4> Abreviação: </h4>
								<input required type="text" name="ABREVIACAO" id="ABREVIACAO_MEDICAO" value="" placeholder="Abreviação" />
							</div>
							<div class="col-6 col-12-xsmall">
								<h4> Nome da Medição: </h4>
								<input required type="text" name="NOME" id="NOME_MEDICAO" value="" placeholder="Medição" />
							</div>

							<div class="col-6 col-12-xsmall">
								<h4> Casas Decimais: </h4>
								<select required name="TIPO_DE_MEDICAO" id="TIPO_DE_MEDICAO">
									<option value="">- Selecione as casas Decimais -</option>
									<option value="1">00</option>
									<option value="2">00,0</option>
									<option value="3">00,00</option>
									<option value="4">00,000</option>
									<option value="5">00,0000</option>
									<option value="6">00%</option>
									<option value="7">00,0%</option>
									<option value="8">00,00%</option>
									<option value="9">00,000%</option>
									<option value="10">00,0000%</option>
								</select>

							</div>

							<div class="col-6 col-12-xsmall">
								<h4> Descrição da medição: </h4>

								<textarea name="DESCRICAO" id="DESCRICAO_MEDICAO" placeholder="Descrição" rows="1"></textarea>
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
						<input type="hidden" name="funcao" value="cadastrar_grupo">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall">
								<h4> Código: </h4>
								<input required type="text" name="CODIGO" id="CODIGO_GRUPO" value="" placeholder="Código" />
							</div>
							<div class="col-6 col-12-xsmall">
								<h4> Nome do Grupo: </h4>
								<input required type="text" name="NOME" id="NOME_GRUPO" value="" placeholder="Grupo" />
							</div>

							<div class="col-12 col-12-xsmall">
								<h4> Descrição do grupo: </h4>

								<textarea name="DESCRICAO" id="DESCRICAO_GRUPO" placeholder="Descrição" rows="3"></textarea>
							</div>

						</div>

						<button class="button" value="1" name="Botao" type="submit" style="float: right;margin-top: 20px; "> Salvar</button>
					</div> 
				</form>
			</div>
		</div>
	</div>
</div>