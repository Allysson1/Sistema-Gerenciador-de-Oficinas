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
        <title>Visualizar Funcionários - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
    </head>

    

<body>

    <?php include '../utils/header.php'; ?>


    <?php include ('../utils/message.php'); ?>


    <div class="row">            
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Visualizar Usuários</p>
            </div>  
    </div> 
      
    
    <div>
        <!-- formulário de login -->
        <main class="mt-5 mt-lg-4 col-12 col-sm-12 col-md-12 col-lg-12"> 

        <div class="row" style="margin: 0px">
                <div class="containerPesquisaHome ml-auto">
                    <div class="col-12">
                        <input type="text" class="inputPesquisaHome" placeholder="Digite a placa...">
                        <button class="botaoPesquisaHome">Pesquisar</button>
                    </div>
                </div>                
            </div>  
            <div class="TabelaUsuario">
                <table class="table table-bordered ml-3 ml-md-3 ml-lg-3 mt-lg-5 col-12 col-lg-12">

                    <thead class="thead-light align-center">
                        <th class="">ID</th>
                        <th class="">Nome do Usuário</th>
                        <th class="">Usuário</th>
                        <th class="">E-mail</th>
                        <th class="">Ações</th>
                    </thead>

                    <tbody>
                        <?php
                            $query = "SELECT * FROM usuario WHERE status =''";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0){

                                foreach($query_run as $funcionario){

                                    ?>
                                    
                                    <tr class="">
                                        <td  class=""><?= $funcionario['idUsuario'];?></td>
                                        <td class=""><?= $funcionario['nome'];?></td>
                                        <td class=""><?= $funcionario['usuario'];?></td>
                                        <td class=""><?= $funcionario['email'];?></td>
                                        <td class="">
                                            <form action="Code_Usuario.php" method="POST" class="d-inline">

                                                <a href="../views/V_EditaUsuario.php?idUsuario=<?= $funcionario['idUsuario'];?>" 
                                                class="m-1 btn btn-info btn-sm">Visualizar</a>
                                                
                                                <button type="submit" name="delete_funcionario" 
                                                value="<?= $funcionario['idUsuario'];?>" 
                                                class="m-1 btn btn-danger btn-sm">Deletar</button>
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
            </div>
        </main>
    </div>

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
</html>