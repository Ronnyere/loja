<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/materialize.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>

<body >
<div id="wrapper">

 <!--Import jQuery before materialize.js-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>

 <script>
    $(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();

  });
 </script>
 


<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center "><img src="img/logo-branca.png" height="50"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="produto-formulario.php">Adiciona Produto</a></li>
        <li><a href="produto-lista.php">Produtos</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="produto-formulario.php">Adiciona Produto</a></li>
        <li><a href="produto-lista.php">Produtos</a></li>
      </ul>
    </div>
</nav>
<div id="header"></div>


