<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("banco-produto.php");?>
<?php

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id =$_POST['categoria_id'];

if(array_key_exists('usado', $_POST)){
  $usado = "true";
}else {
  $usado = "false";
}





 if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>

       <p class="toast rounded" >Produto <?php echo $nome;?>,<?php echo $preco; ?>  adicionado.</p>

   <?php } else {
         $msg = mysqli_error($conexao);
    ?>
       <p class="toast rounded  red" >Produto <?php echo $nome;?>,<?php echo $preco; ?>  nao foi adicionado: <?=$msg?></p>

   <?php } 
         mysqli_close($conexao);
   ?> 


<?php include ("rodape.php");?>