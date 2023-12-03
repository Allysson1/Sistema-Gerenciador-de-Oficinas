<!-- identifica em qual página está o usuário para desativar o link da mesma no menu -->
<?php $page = basename($_SERVER['PHP_SELF']) ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>    
    
    <aside class="navbar-nav" id="sidebar">
        <div class="divFecharMenu" id="divFecharMenu">
          <button class="fecharMenu"><i class="fas fa-solid fa-xmark"></i></button>
        </div>
        <nav class="navMenu">
            <div class="divLogoNav">
              <img class="logoNav" src="../images/Logo.svg" alt="imagem de um volande de carro simples">              
            </div>
            <ul>
                <div class="tituloNav" style="margin-bottom: -8px"><span><i class="fa-solid fa-user" style="margin-right: 10px; color: #007fff"></i>Cliente</span></div>
                <li><a class="opcaoNav <?php if($page == 'cadastroCliente.php'):echo "disabled"; endif; ?>" style="margin-bottom: -8px" href="../views/cadastroCliente.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Cadastro de Cliente</a></li>
                <li><a class="opcaoNav <?php if($page == 'consultaCliente.php'):echo "disabled"; endif; ?>" href="../views/consultaCliente.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Consulta de Cliente</a></li>

                <div class="tituloNav" style="margin-bottom: -8px"><span><i class="fas fa-solid fa-car" style="margin-right: 10px; color: #007fff"></i>Serviço</span></div>
                <li><a class="opcaoNav <?php if($page == 'cadastroServico.php'):echo "disabled"; endif; ?>" style="margin-bottom: -8px" href="../views/cadastroServico.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Cadastro de Serviços</a></li>
                <li><a class="opcaoNav <?php if($page == 'home.php'):echo "disabled"; endif; ?>" href="../views/home.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Consulta de Serviços </a></li>
                
                <div class="tituloNav" style="margin-bottom: -8px"><span> <i class="fa-solid fa-computer" style="margin-right: 10px; color: #007fff"></i>Usuário</span></div>
                <li><a class="opcaoNav <?php if($page == 'V_cadastraUsuario.php'):echo "disabled"; endif; ?>" style="margin-bottom: -8px" href="../views/V_cadastraUsuario.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Cadastro de Usuário</a></li>
                <li><a class="opcaoNav <?php if($page == 'V_VisualizaUsuarios.php'):echo "disabled"; endif; ?>" href="../views/V_VisualizaUsuarios.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Consulta de Usuários</a></li>

                <div class="tituloNav" style="margin-bottom: -8px"><span><i class="fa-solid fa-screwdriver-wrench" style="margin-right: 10px; color: #007fff"></i>Peças</span></div>
                <li><a class="opcaoNav <?php if($page == 'cadastroPeca.php'):echo "disabled"; endif; ?>" style="margin-bottom: -8px" href="../views/cadastroPeca.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Cadastro de Peças</a></li>
                <li><a class="opcaoNav <?php if($page == 'ConsultaPeca.php'):echo "disabled"; endif; ?>" href="../views/ConsultaPeca.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Consulta de Peças</a></li>
                
                <div class="tituloNav" style="margin-bottom: -8px"><span><i class="fa-solid fa-truck" style="margin-right: 10px; color: #007fff"></i>Fornecedor</span></div>
                <li><a class="opcaoNav <?php if($page == 'cadastroFornecedor.php'):echo "disabled"; endif; ?>" style="margin-bottom: -8px" href="../views/cadastroFornecedor.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Cadastro de Fornecedor</a></li>
                <li><a class="opcaoNav <?php if($page == 'consultaFornecedor.php'):echo "disabled"; endif; ?>" href="../views/consultaFornecedor.php"><i class="fas fa-solid fa-minus" style="margin-right: 10px; font-size: 13px;"></i>Consulta de Fornecedor</a></li>

                <div class="sairNav "><span><a href="../utils/logout.php">Trocar Usuário/Sair</a></span></div>
            </ul>
        </nav>

        
    </aside>

    <header class="menuPequeno">       
        <nav class="navPequeno">
            <div class="row">
                <div class="col-5" style="margin: 0; padding: 0;">
                    <button class="botaoBars" type="button" id="btnAbreMenu">
                        <i class="fas fa-bars" style="font-size: 18px;"></i>
                    </button>
                </div>
                <div class="col-7">
                    <img class="logoNavPequeno" src="../images/Logo.svg" alt="imagem de um volante de carro simples">
                </div>
            </div>
        </nav>  
    </header>
    
</body>

<script>
  document.getElementById('btnAbreMenu').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
    
    const menuPequeno = document.querySelector('.menuPequeno');
    
    if (menuPequeno.style.display === 'none') {
        menuPequeno.style.display = 'block';
    } else {
        menuPequeno.style.display = 'none';
    }
  });

  document.getElementById('divFecharMenu').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('active');

    const menuPequeno = document.querySelector('.menuPequeno');
    
    if (menuPequeno.style.display === 'none') {
        menuPequeno.style.display = 'block';
    } else {
        menuPequeno.style.display = 'none';
    }
  });
  
  window.addEventListener('resize', function () {
    const menuPequeno = document.querySelector('.menuPequeno');
    
    if (window.innerWidth > 768) {
        menuPequeno.style.display = 'none';
    }
    else{
      menuPequeno.style.display = 'block';
    }
  });
</script>
</html>





