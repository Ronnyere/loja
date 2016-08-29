<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("banco-produto.php");?>



<div id="content">
<div class="card">

  <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
     <p class="toast rounded">Produto apagado com sucesso !</p> 
  <?php } ?>

 <div class="card-content">
    <div class="col l12 m12 s12">
      <span class="card-title">Lista de Produtos</span>
    </div>

  

<table class="centered responsive-table">

    <thead>
        <tr>
          <th  data-field="id">Nome</th>
          <th  data-field="name">Preço</th>
          <th  data-field="name">Descrição</th>
          <th  data-field="name">Categoria</th>
          <th  data-field="name">Ação</th>
        </tr>
    </thead>

<tbody>
<?php
$produtos = listaProdutos($conexao);
foreach($produtos as $produto) {
?>
 <tr>
 	<td><?= $produto['nome'] ?></td>
 	<td><?= $produto['preco'] ?></td>
  <td><?= substr($produto['descricao'], 0, 20) ?></td>
  <td><?= $produto['categoria_nome'] ?></td>
  

  <td>
    <form action="remove-produto.php" method="post">
      <a class="btn-flat disabled" href="produto-altera-formulario.php?id=<?=$produto['id']?>">
      <i class="material-icons edit" style="font-size: 2rem">edit</i></a>    
      
      <input type="hidden" name="id" value="<?=$produto['id']?>" />
      <button class="btn-flat disabled"><i class="material-icons delete " style="font-size: 2rem">delete</i></button>
    </form>
 		
 	</td>
 </tr>
<?php
     }
?>
</tbody>

</table>


</div>
</div>
</div>
<?php include ("rodape.php");?>