<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../TGFATEC/css/bootstrap.min.css">
        <link rel="stylesheet" href="../TGFATEC/css/style.css"> 
        <title>Cadastro de Funcionários - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../TGFATEC/images/icon.volante.svg">
    </head>

    <!-- <?php include 'header.php'; ?> -->


    <body class="container-fluid row justify-content-center">



        <!-- formulário de login -->
        <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-10"> 

            <p> <a href="logout.php">Sair</a></p>
            <p> <a href="V_VisualizaUsuarios.php">Visualizar</a></p>
            <p> <a href="V_Editausuario.php">Edita</a></p>

            <?php include ('message.php'); ?>

            <h4 class="col-12 m-3 pb-4 border-bottom">Cadastro de Funcionários</h4>

            <form action="Code_Usuario.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
            

                <div class=" col-12 col-md-6 float-md-left">
                    <label class="col-12 col-md-12 mt-5 mt-md-5" 
                for="text">Nome do Funcionário:</label>
                <input class="col-12 col-md-12  mt-md-1 p-3 textBox" 
                type="text" name="nomeFuncionario" placeholder="Digite seu nome completo:" autofocus="true"/>
                </div>
                
                <div class=" col-12 col-md-6 float-md-left">
                    <label class="col-12 col-md-12  mt-5 mt-md-5" 
                for="text">Usuário:</label>
                <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                type="text" name="usuario" placeholder="Digite seu nome de Usuário:"/>
                </div>


                <div class=" col-12 col-md-6 float-md-left">
                    <label class="col-12 col-md-12 mt-5 mt-md-5" 
                for="password">Senha:</label>
                <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                type="password" name="senha" placeholder="Digite sua Senha:"/>
                </div>

                <div class=" col-12 col-md-6 float-md-left">
                    <label class="col-12 col-md-12  mt-5 mt-md-5" 
                for="email">E-mail:</label>
                <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                type="email" name="email" placeholder="Digite seu E-mail:"/>
                </div>


                <div class="float-right col-5 col-md-3 mt-5 mt-md-5">
                <button class="col-12 ml-1 p-3 btn btn-primary" type="submit" name="save_funcionario">Cadastrar</button>      
                </div>

            </form>

        </main>

        <script src="../TGFATEC/js/bootstrap.bundle.min.js"></script>
        <script src="../TGFATEC/js/bootstrap.min.js"></script>
        
    </body>
</html>