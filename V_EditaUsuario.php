<?php
    session_start();
    require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../TGFATEC/css/bootstrap.min.css">
        <link rel="stylesheet" href="../TGFATEC/css/style.css"> 
        <title>Edição de Funcionários - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../TGFATEC/images/icon.volante.svg">
    </head>

    <!-- <?php include 'header.php'; ?> -->


    <body class="container-fluid row justify-content-center">



        <!-- formulário de login -->
        <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-10"> 

            <?php include ('message.php'); ?>

            <h4 class="col-12 m-3 pb-4 border-bottom">Edição de Funcionários</h4>

            <?php
                if (isset($_GET['idUsuario']))
                {
                    echo $_GET['idUsuario'];
                    $funcionario_id = mysqli_real_escape_string($con, $_GET['idUsuario']);
                    $query = "SELECT * FROM usuario WHERE idUsuario ='$funcionario_id' ";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0){

                        $funcionario = mysqli_fetch_array($query_run);

                        ?>

                        <form action="Code_Usuario.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
                                    

                            <div class=" col-12 col-md-6 float-md-left">
                                <label class="col-12 col-md-12 mt-5 mt-md-5" 
                            for="email">Nome do Funcionário:</label>
                            <input class="col-12 col-md-12  mt-md-1 p-3 textBox" 
                            type="text" name="nomeFuncionario" value="<?= $funcionario['nome'];?>" autofocus="true"/>
                            </div>
                            
                            <div class=" col-12 col-md-6 float-md-left">
                                <label class="col-12 col-md-12  mt-5 mt-md-5" 
                            for="password">Usuário:</label>
                            <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                            type="text" name="usuario" value="<?= $funcionario['usuario'];?>"/>
                            </div>


                            <div class=" col-12 col-md-12 float-md-left">
                                <label class="col-12 col-md-12 mt-5 mt-md-5" 
                            for="password">Digite a nova Senha:</label>
                            <input class="col-12 col-md-6 mt-md-1 p-3 textBox" 
                            type="password" name="senha"/>
                            </div>


                            <div class="float-right col-5 col-md-3 mt-5 mt-md-5">
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

        <script src="../TGFATEC/js/bootstrap.bundle.min.js"></script>
        <script src="../TGFATEC/js/bootstrap.min.js"></script>
        
    </body>
</html>