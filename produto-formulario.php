

<?php include ("cabecalho.php");
   include ("conecta.php");
   include("banco-categoria.php");

$categorias = listaCategorias($conexao);
   ?>


<div class="card">
  <div class="card-content black-text">
    <div class="col l12 m12 s12">
      <span class="card-title">Formulario de Produtos</span>
    </div>

  <div class="row">
    <form class="col s12" action="adiciona-produto.php" method="post">

      <div class="row">
        <div class="input-field col s12 m6 l6">
          <input name="nome" type="text" class="validate">
          <label for="last_name">Nome</label>
        </div>

        <div class="input-field col s12 m6 l6">
          <input name="preco" type="number" class="validate">
          <label for="last_name">Preço</label>
        </div>
      </div>



        <div class="input-field col s12 m6 l6">
        <select multiple name="categoria_id">
        <option value="" disabled selected>Categorias</option>
        <?php foreach($categorias as $categoria) : ?>
        <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
        <?php endforeach ?>
        </select>
        </div>&nbsp;


         <!-- Switch -->
        <div class="input-field col s12 m6 l6">
         <div class="switch">
           <label>
               Novo
            <input type="checkbox" name="usado" value="true">
            <span class="lever"></span>
               Usado
           </label>
         </div>
         </div>


        <div class="input-field col s12 m12 l12">
          <textarea name="descricao" class="materialize-textarea"></textarea>
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