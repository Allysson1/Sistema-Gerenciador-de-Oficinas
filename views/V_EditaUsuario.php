<?php
    session_start();
    require '../utils/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="../css/bootstrap-reboot.min.css" >
        <link rel="stylesheet" href="../css/style.css"> 
        <title>Edição de Funcionários - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
    </head>

<body>    
    <?php include '../utils/header.php'; ?>

    <div class="row">            
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Edição de Usuários</p>
            </div>  
        </div> 


    <div class="float-lg-right col-lg-9 container-fluid row justify-content-center">
        <!-- formulário de login -->
        <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-12"> 

            <?php include ('../utils/message.php'); ?>

            <h4 class="col-12 m-3">Modifique os campos que deseja alterar:</h4>

            <?php
                if (isset($_GET['idUsuario']))
                {
                    
                    $funcionario_id = mysqli_real_escape_string($con, $_GET['idUsuario']);
                    $query = "SELECT * FROM usuario WHERE idUsuario ='$funcionario_id' ";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0){

                        $funcionario = mysqli_fetch_array($query_run);

                        ?>

                        <form action="../models/Code_Usuario.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
                             
                        <!-- aqui esta o ID do usuário, ele não é visivel ao usuario, e 
                             serve para indicar o ID do usuario na tela de V_EditaUsuario.php -->
                            <input type="hidden" name="funcionario_id" value="<?= $funcionario['idUsuario']; ?>">

                            <div class=" col-12 col-md-6 float-md-left">
                                <label class="col-12 col-md-12 mt-5 mt-md-5" 
                            for="text">Nome do Funcionário:</label>
                            <input class="col-12 col-md-12  mt-md-1 p-3 textBox" 
                            type="text" name="nomeFuncionario" value="<?= $funcionario['nome'];?>" autofocus="true"/>
                            </div>
                            
                            <div class=" col-12 col-md-6 float-md-left">
                                <label class="col-12 col-md-12  mt-5 mt-md-5" 
                            for="text">Usuário:</label>
                            <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                            type="text" name="usuario" value="<?= $funcionario['usuario'];?>"/>
                            </div>


                            <div class=" col-12 col-md-6 float-md-left">
                                <label class="col-12 col-md-12 mt-5 mt-md-5" 
                            for="password">Digite a nova Senha:</label>
                            <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                            type="password" name="senha"/>
                            </div>

                            <div class=" col-12 col-md-6 float-md-left">
                                <label class="col-12 col-md-12  mt-5 mt-md-5" 
                            for="email">E-mail:</label>
                            <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                            type="email" name="email" value="<?= $funcionario['email'];?>"/>
                            </div>

                            <div class=" col-12 col-md-12 float-md-left">
                                <label class="col-12 col-md-12 mt-5 mt-md-5" 
                            for="password">Repita a nova Senha:</label>
                            <input class="col-12 col-md-6 mt-md-1 p-3 textBox" 
                            type="password" name="confSenha"/>
                            </div>


                            <div class="float-right col-5 col-md-3 mt-5 mb-5 mt-md-5">
                            <button class="col-12 ml-1 p-3 btn btn-primary" type="submit" name="update_funcionario">Alterar</button>      
                            </div>

                        </form>
                        <?php



                    }
                    else{
                        echo "<h4>Nenhum ID encontrado</h4>";
                    }
                }
                else{
                        echo "<h4>ocorreu algum erro</h4>";
                }
                ?>
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
        
    </div>

</body>
</html>