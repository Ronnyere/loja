<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/materialize.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>

<body>

 <!--Import jQuery before materialize.js-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>

 <script>
    $(document).ready(function() {
    $('select').material_select();
  });
 </script>
 

<nav>
  <div class="nav-wrapper z-depth-1">
    <a href="index.php" class="brand-logo center "><img src="img/logo-branca.png" height="50"></a>
    <ul class="right hide-on-med-and-down">
        <li><a href="produto-formulario.php">Adiciona Produto</a></li>
        <li><a href="produto-lista.php">Produtos</a></li>
        <li><a href="sobre.php">Sobre</a></li>
      
    </ul>
  </div>
</nav>

<!--<nav>
  <div class="nav-wrapper navbar-fixed z-depth-1">
    <a href="#!" class="brand-logo hide-on-small-only center"><img src="img/logo-branca.png" height="50"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    
    <ul class="right">
      <li>
        <a class="waves-effect waves-light modal-trigger" href="#modal-alertas">
          <span class="badge-new">1</span>
          <i class="material-icons">add_alert</i>
        </a>
      </li>
      <li>
        <a href="#" class="waves-effect waves-light">
          <span class="badge-new">2</span>
          <i class="material-icons">supervisor_account</i>
        </a>
      </li>
      <li>
        <a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown-mensagem" data-beloworigin="true">
          <span id='qtdNaoLida' class="badge-new"></span>
          <i class="material-icons">comment</i>
        </a>
      </li>
    </ul>

      <ul class="side-nav black-text" id="mobile-demo">
      <li>
        <div class="perfil">
            <img  class="responsive-img circle img-perfil" src="https://randomuser.me/api/portraits/women/46.jpg">
        </div>
      </li>

      <li>
        <ul class="collapsible collapsible-accordion">
          <li id="menu-usuario">
            <a id="nome-perfil" class="collapsible-header waves-effect bold">
                <i class="material-icons right">add</i>
                <span class="nome">{{$user_name}}</span>
            </a>
              <div class="collapsible-body" style="">
              <ul>
                  <li>
                  <a href="#">
                    <i class="material-icons left">perm_identity</i>
                    Editar Perfil
                  </a>
                  </li>
                <li>
                  <a href="#">
                    <i class="material-icons left">settings</i>
                    Configurações
                  </a>
                  </li>
                  <li>
                  <a href="{{route('logout')}}">
                    <i class="material-icons left">power_settings_new</i>
                    Sair
                  </a>
                </li>
              </ul>
            </div>
           </li>
          
        </ul>
        </li>
    </ul>
  </div>
</nav>-->


