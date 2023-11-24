<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <title>Login - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
    </head>

    <body class="TelaLogin container-fluid row justify-content-center">

        <div class="row mt-5 pt-md-5 pt-lg-0">
        <img class="pt-4 pl-4" src="../images/logo.svg" alt="imagem de um volande de carro simples, com o nome Ti Car escrito ao lado"> 
        </div>    
        <!-- formulário de login -->
        <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-12 row justify-content-center"> 

            <form action="../models/Code_Login.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-7 row formLogin border border-white rounded justify-content-center">
                <h1 class="p-5">Login</h1>
                <label class="col-12" for="text">E-mail:</label>
                <input class="col-12 p-3 textBoxLogin" name="email" type="text" placeholder="Digite seu E-email:" autofocus="true"/>
                <label class="col-12 mt-5" for="password">Senha:</label>
                <input class="col-12 p-3 textBoxLogin" name="senha" type="password" placeholder="Digite sua senha:"/>
                <!-- Botão para acionar modal -->
                <a data-toggle="modal" data-target="#ModalRedefineSenha" class="col-12 p-2" href="../views/V_redefineSenha.php">Esqueci minha senha</a>
                <?php include ('../utils/message.php'); ?>
                <button class="col-6 m-3 p-3 btn btn-primary" type="submit" name="login">Entrar</button>
            </form>

            

            <!-- Modal -->
            <div class="modal fade" id="ModalRedefineSenha" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorModal" id="TituloModalCentralizado">Redefinição de Senha:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action= "../models/Code_Envia_Email.php" method="POST">
                            <div class="modal-body">
                                <label class="col-12 colorModal" for="text">Digite seu E-mail abaixo:</label>
                                <input class="col-12 p-3 textBoxLogin" name="email" type="text" placeholder="Digite seu E-email:" autofocus="true" maxlength = "40"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary" name="redefine">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>    

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>
     <!-- feito por Allysson -->
</html>