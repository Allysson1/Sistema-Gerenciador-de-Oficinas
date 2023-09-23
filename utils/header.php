<!-- identifica em qual página está o usuário para desativar o link da mesma no menu -->
<?php $page = basename($_SERVER['PHP_SELF']) ?>

<header class=" d-block d-sm-block d-md-block d-lg-none" id="topo" style="margin-top: 60px;">

  <div class="fixed-top">

    <nav class="navbar navbar-dark bgNav">
        <div class="container">
            <div class="row">
                <div class="col-9" style="margin: 0; padding: 0;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-3 text-center">
                    <img class="logoNav" src="images/Logo.svg" alt="imagem de um volante de carro simples">
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu mobile e tablet -->
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
      <div class="bgNav p-4">
        <ul class="navbar-nav">

        <h5 class="text-white mt-2 h4">Serviços</h5>

          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Cadastro de Serviços</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Consulta de Serviços</a>
          </li>

        <h5 class="text-white mt-5 h4">Usuários</h5>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == 'V_cadastraUsuario.php'):echo "disabled"; endif; ?>" href="../views/V_cadastraUsuario.php">Cadastro de Usuário</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == 'V_VisualizaUsuarios.php'):echo "disabled"; endif; ?>" href="../views/V_VisualizaUsuarios.php">Consulta de Usuários</a>
          </li>

          <h5 class="text-white mt-5 h4">Peças</h5>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Cadastro de Peças</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Consulta de Peças</a>
          </li>

          <h5 class="text-white mt-5 h4">Fornecedores</h5>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Cadastro de Fornecedores</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Consulta de Fornecedores</a>
          </li>
          
          <li class="nav-item mt-5 mb-5 pb-5 mb-sm-0 pb-sm-0">
            <a class="nav-link h4" href="logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>    
  </div>
</header>


<!-- nav telas grandes -->
<aside class="float-lg-left col-lg-3 col-xl-3 d-none d-sm-none d-md-none d-lg-block asideNav">
 
  <nav>

      <div class="row pt-md-5 pt-lg-0 border-bottom">
        <img class="col-6 mt-lg-3 mt-xl-3 mb-lg-4 logoNav" src="images/Logo.svg" alt="imagem de um volande de carro simples"> 
      </div>

      <ul class="navbar-nav">

        <h5 class="text-white mt-5 h4">Serviços</h5>

        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Cadastro de Serviços</a>
        </li>
        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Consulta de Serviços</a>
        </li>

        <h5 class="text-white mt-5 h4">Usuários</h5>
        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == 'V_cadastraUsuario.php'):echo "disabled"; endif; ?>" href="V_cadastraUsuario.php">Cadastro de Usuário</a>
        </li>
        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == 'V_VisualizaUsuarios.php'):echo "disabled"; endif; ?>" href="V_VisualizaUsuarios.php">Consulta de Usuários</a>
        </li>

        <h5 class="text-white mt-5 h4">Peças</h5>
        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Cadastro de Peças</a>
        </li>
        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Consulta de Peças</a>
        </li>

        <h5 class="text-white mt-5 h4">Fornecedores</h5>
        <li class="nav-item ml-4">
          <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Cadastro de Fornecedores</a>
        </li>
        <li class="nav-item ml-4 mb-2">
          <a class="nav-link <?php if($page == '#'):echo "disabled"; endif; ?>" href="#">Consulta de Fornecedores</a>
        </li>
        
        <li class="nav-item mt-4 mb-5 pb-5">
          <a class="nav-link h4" href="utils/logout.php">Sair</a>
        </li>
    </ul>
  </nav>
</aside>