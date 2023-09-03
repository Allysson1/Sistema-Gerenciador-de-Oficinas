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
        <title>Visualizar Funcionários - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../TGFATEC/images/icon.volante.svg">
    </head>

    <!-- <?php include 'header.php'; ?> -->


    <body class="container-fluid row justify-content-center">



        <!-- formulário de login -->
        <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-10"> 

        <p> <a href="V_EditaUsuario.php">Edita</a></p>
        <p> <a href="V_cadastraUsuario.php">cadastrar</a></p>

            <?php include ('message.php'); ?>

            <h4 class="col-12 m-3 pb-4 border-bottom">Visualizar Funcionários</h4>

            <table class="table table-bordered ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">

                <thead class="thead-light">
                    <th>ID</th>
                    <th>Funcionário</th>
                    <th>Usuário</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                    <?php
                        $query = "SELECT * FROM usuario WHERE status =''";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0){

                            foreach($query_run as $funcionario){

                                ?>
                                
                                <tr>
                                    <td><?= $funcionario['idUsuario'];?></td>
                                    <td><?= $funcionario['nome'];?></td>
                                    <td><?= $funcionario['usuario'];?></td>
                                    <td><?= $funcionario['email'];?></td>
                                    <td>
                                        <form action="Code_Usuario.php" method="POST" class="d-inline">

                                            <a href="V_EditaUsuario.php?idUsuario=<?= $funcionario['idUsuario'];?>" 
                                            class="btn btn-info btn-sm">Visualizar</a>
                                            
                                            <button type="submit" name="delete_funcionario" 
                                            value="<?= $funcionario['idUsuario'];?>" 
                                            class="btn btn-danger btn-sm">Deletar</button>
                                        </form>
                                    </td>
                                </tr> 
                                <?php   
                            }
                        }
                        else{
                            echo "<h5> Nenhum aluno cadastrado </h5>";
                        }
                    ?>    
                    
                </tbody>
            </table>

        </main>

        <script src="../TGFATEC/js/bootstrap.bundle.min.js"></script>
        <script src="../TGFATEC/js/bootstrap.min.js"></script>
        
    </body>
</html>