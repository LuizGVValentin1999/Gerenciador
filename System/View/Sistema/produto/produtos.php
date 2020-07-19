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
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody id="tableId" class="element">
						<tr>
							<td>Item One</td>
							<td>Ante turpis integer aliquet porttitor.</td>
							<td>29.99</td>
						</tr>
						<tr>
							<td>Item Two</td>
							<td>Vis ac commodo adipiscing arcu aliquet.</td>
							<td>19.99</td>
						</tr>
						<tr>
							<td>Item Three</td>
							<td> Morbi faucibus arcu accumsan lorem.</td>
							<td>29.99</td>
						</tr>
						<tr>
							<td>Item Four</td>
							<td>Vitae integer tempus condimentum.</td>
							<td>19.99</td>
						</tr>
						<tr>
							<td>Item Five</td>
							<td>Ante turpis integer aliquet porttitor.</td>
							<td>29.99</td>
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