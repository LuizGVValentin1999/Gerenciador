<?php 
include('System/Checker/conection.php');
echo @$_SESSION['msg'];
unset($_SESSION['msg']);
?>
<!-- Wrapper -->
<div id="wrapper">
	<!-- Main -->
	<section class="wrapper">
		<div class="inner">
			<a class="button" value="1" name="Botao" href="cadastrarProduto" style="float: right;margin-top: 20px;" >Adicionar</a>
			<h1 >Produtos</h1>
		</div>
	</section>
	<section id="main" class="wrapper">
		<div class="inner" style="padding-top: 0px;" >
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nome</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody id="tableId" class="element">
					<?php
					$query = "SELECT * FROM produto";
					$result = mysqli_query($con, $query);
					while(@$linha=mysqli_fetch_array($result)){
					?>
						<tr>
							<td><?=$linha['CODIGO']?></td>
							<td><?=$linha['NOME']?></td>
							<td><?=$linha['DESCRICAO']?></td>
						</tr>
					<?php } ?>
						</tr>
					</tbody>
				</table>
			</div>	
		</div>
	</section>
</div>
<script>
	function addRowHandlers() {
    var rows = document.getElementById("tableId").rows;
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function(){ return function(){
              var cell = this.cells[0];
               var id = cell.innerHTML;
			   window.location.href = "cadastrarProduto#"+id
        };}(rows[i]);
    }
}
window.onload = addRowHandlers();

document.querySelector('.element').addEventListener('mouseover',() => {
  document.querySelector('.element').style.cursor = 'pointer';
});
	</script>