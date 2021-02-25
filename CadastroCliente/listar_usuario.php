<?php
include_once "database.php";

//consultar no banco de dados
$result_usuario = "SELECT * FROM cliente ORDER BY codCli ASC";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-dark">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>CPF</th>
				<th>Telefone</th>
				<th>Nascimento</th>
				<th>Opções</th>
			</tr>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['codCli']; ?></td>
					<td><?php echo $row_usuario['nomCli']; ?></td>
					<td><?php echo $row_usuario['emailClie']; ?></td>
					<td><?php echo $row_usuario['cpfCli']; ?></td>
					<td><?php echo $row_usuario['teleCli']; ?></td>
					<td><?php echo $row_usuario['dataCli']; ?></td>
					<td class="acoes"> 
					<a class="btn btn-warning btn-xs" >Editar</a> 
					<a class="btn btn-danger btn-xs" data-toggle="modal"
					data-target="#delete-modal">Excluir</a></td>
				</tr>
				<?php
			}?> 
		</tbody>
	</table>
	<br/>
	<br/>
	<form  method="post" action="process.php">
	<h2>Cadastre um novo Cliente</h2>
  <div class="form-group">
    <label for="nome">Nome Clompeto do cliente</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome completo do cliente aqui " required>
  </div>
  <div class="form-group">
    <label for="email">Insira o email do cliente</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Exemplo de e-mail: exemplo@exemplo.exemplo" required>
  </div>
  <div class="form-group">
    <label for="cpf">Insira o cpf do cliente</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Exemplo: 000.000.000-00" required>
  </div>
  <div class="form-group">
  <label for="fone">Insira o Telefone do cliente</label>
    <input type="text" class="form-control" id="fone" name="fone" placeholder="Exemplo: (00)00000-0000" required>
  </div>
  <div class="form-group">
  <div class="col-md-6">
 <label for="date">Data de Nascimento do Cliente</label>
   <input id="data" name="data" type="date" require>
</div>
  </div>
<div class="form-group">
</div>
<a href="http:"></a><input type="submit" value="Cadastrar" name="Cadastrar">
	</form>
<?php

}
else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
?>
