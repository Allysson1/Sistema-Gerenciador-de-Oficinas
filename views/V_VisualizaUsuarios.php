<?php
    require ('../utils/conexao.php');
    include('../utils/protect.php');
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 4;
    


    if ($_SESSION['nivelFuncionario'] < $nivel_necessario){
        header("location: ../views/home.php");
        $_SESSION['message'] = "Você não tem acesso a está página";
        exit;
    }
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

        <?php include '../utils/header.php';?>  


        
        
        
        <div class="main-content">
        
            <div class="row">            
                    <div class="col-12 divHeaderTopoSite">
                        <p class="nameHeaderTopoSite">Visualizar Usuários</p>
                    </div>  
                </div> 

            <main class="p-md-1 p-lg-5"> 

                

                <div class="row" style="margin: 0px">
                    <div class="containerPesquisaHome ml-auto">
                        <div class="col-12">
                            <input type="text" class="inputPesquisaHome" placeholder="...">
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
                            <th>Nível de Acesso</th>
                            <th class="">Ações</th>
                        </thead>

                        <tbody>
                            <?php
                                $query = "SELECT * FROM usuario WHERE status ='' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0){

                                    foreach($query_run as $funcionario){

                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $funcionario['idUsuario'];?></td>
                                            <td><?= $funcionario['nome'];?></td>
                                            <td><?= $funcionario['usuario'];?></td>
                                            <td><?= $funcionario['email'];?></td>
                                            <td><?= $funcionario['nivelFuncionario'];?></td>
                                            <td>
                                                <form action="../models/Code_Usuario.php" method="POST" class="d-inline">

                                                    <a data-toggle="modal" data-target="#ModalUsuario<?= $funcionario['idUsuario'];?>"
                                                    class="m-1 btn btn-sm btn_visualizar">Visualizar</a>
                                                    
                                                    <button type="submit" name="delete_funcionario" 
                                                    value="<?= $funcionario['idUsuario'];?>" 
                                                    class="m-1 btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                        <?php include ('../utils/message.php'); ?>

                                        <div class="modal fade" id="ModalUsuario<?= $funcionario['idUsuario'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="ModalAlterarLabel">Alterar dados da peça</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <div class="modal-body">
                                            
                                                <section class="section-content">  
                                                    <form action="../models/Code_Usuario.php" method="POST">

                                                        <!-- linha abaixo necessária para encontrar o id do usuario no comando sql-->
                                                        <input type="hidden" name="funcionario_id" value="<?= $funcionario['idUsuario']; ?>">

                                                        <div class="row">
                                                            <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                                                
                                                                <div class="col-6">
                                                                    <label for="text">Nome do Funcionário:</label>
                                                                    <input type="text" name="nomeFuncionario" class="form-control p-2 p-2 campoDigitar" 
                                                                    value="<?= $funcionario['nome'];?>"/>
                                                                </div>

                                                                <div class="col-6">
                                                                    <label for="text">Usuário:</label>
                                                                    <input type="text" name="usuario" class="form-control p-2 campoDigitar"
                                                                    value="<?= $funcionario['usuario'];?>"/>
                                                                </div>   
                                                            </div>

                                                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                                <div class="col-6">
                                                                    <label for="password">Digite a nova Senha:</label>
                                                                    <input type="password" name="senha" class="form-control p-2 campoDigitar"/>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="email">E-mail</label>
                                                                    <input type="email" name="email" class="form-control p-2 campoDigitar"
                                                                    value="<?= $funcionario['email'];?>"/>
                                                                </div>                   
                                                            </div>
                                            
                                                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                                <div class="col-6">
                                                                    <label for="password">Repita a nova Senha:</label>
                                                                    <input type="password" name="confSenha" class="form-control p-2 campoDigitar"/>
                                                                </div>

                                                                <div class="col-6">
                                                                    <label for="username">Nivel de acesso do Usuário:</label>
                                                                    <select class="custom-select" name="nivelFuncionario" id="inputGroupSelect01">
                                                                        <option selected><?= $funcionario['nivelFuncionario'];?></option>
                                                                        <option value="1">1 - Consulta de Serviços</option>
                                                                        <option value="2">2 - Manipulção de Serviços</option>
                                                                        <option value="3">3 - Manipulção de Peças</option>
                                                                        <option value="4">4 - Acesso total ao Sistema</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-12 text-right">
                                                                    <button class="botaoOrdem" type="submit" name="update_funcionario">
                                                                    Salvar Alterações
                                                                    </button>
                                                            </div>                    
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>

                                        <?php  
                                    }
                                }
                                else{
                                    echo "<h5> Nenhum funcionário cadastrado </h5>";
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