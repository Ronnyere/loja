

<?php include ("cabecalho.php");
   include ("conecta.php");
   include("banco-categoria.php");
   include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
   ?>


<div class="card">
  <div class="card-content black-text">
    <div class="col l12 m12 s12">
      <span class="card-title">Alterando  Produtos</span>
    </div>

  <div class="row">
    <form class="col s12" action="altera-produto.php" method="post">
     <input type="hidden" name="id" value="<?=$produto['id']?>" />
     
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <input name="nome" type="text" class="validate" value="<?=$produto['nome']?>">
          <label for="last_name">Nome</label>
        </div>

        <div class="input-field col s12 m6 l6">
          <input name="preco" type="number" class="validate" value="<?=$produto['preco']?>">
          <label for="last_name">Preço</label>
        </div>
      </div>



        <div class="input-field col s12 m6 l6">
        <select multiple name="categoria_id">
        <option value="" disabled selected>Categorias</option>
        <?php foreach($categorias as $categoria) : 

          $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
          $selecao = $essaEhACategoria ? "selected='selected'" : "";
         ?> 
         <option value="<?=$categoria['id']?>" <?=$selecao?>>
                    <?=$categoria['nome']?></option>
        <?php endforeach ?>
        </select>
        </div>&nbsp;


         <!-- Switch -->
        <div class="input-field col s12 m6 l6">
         <div class="switch">
           <label>
               Novo
           <input type="checkbox" name="usado" <?=$usado?> value="true">
            <span class="lever"></span>
               Usado
           </label>
         </div>
         </div>


        <div class="input-field col s12 m12 l12">
          <textarea class="materialize-textarea" name="descricao"><?=$produto['descricao']?></textarea>
          <label for="textarea1">Descrição</label>
        </div>


      <div class="input-field col s12 m12 l12">
      <button class="btn-flat disabled" type="submit" value="cadastrar">Salvar
      <i class="material-icons right">send</i>
      </button>
      </div>
      
      
    </form>
  </div>
</div>
  
  <?php include ("rodape.php") ?>