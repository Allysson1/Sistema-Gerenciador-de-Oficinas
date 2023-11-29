<?php
    require('../utils/conexao.php');
    include('../utils/protect.php');
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 2;

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
        <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>"> 
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="../css/bootstrap-reboot.min.css" >        
        <title>Visualizar Cliente - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
    </head>
    
    <body>

        <?php include '../utils/header.php';?>  

        <div class="main-content">
        
            <div class="row">            
                    <div class="col-12 divHeaderTopoSite">
                        <p class="nameHeaderTopoSite">Visualizar Clientes</p>
                    </div>  
                </div> 

            <main style="margin: 10px 20px"> 

                <div class="row">
                    <div class="containerPesquisaHome ml-auto">
                        <div class="col-12">
                            <input type="text" class="inputPesquisaHome" id="filtrar-tabela" placeholder="Digite o cliente...">
                        </div>
                    </div>                
                </div>  

                
                <div class="TabelaUsuario">
                    <table class="table table-bordered col-12 tabelaVerUsuario">
                    

                        <thead class="thead-light align-center">
                            <th class="">CPF</th>
                            <th class="">Nome do Cliente</th>
                            <th class="">Endereco</th>
                            <th class="">Cidade</th>
                            <th class="">UF</th>
                            <th class="">Contato</th>
                            <th class="">Ações</th>
                        </thead>

                        <tbody>
                            <?php
                                $query = "SELECT * FROM cliente WHERE statusCliente ='' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0){

                                    foreach($query_run as $cliente){

                                        ?>
                                        <!-- classe "consulta" destinada a manipulação de filtro -->
                                        <tr class="consulta">
                                            <td><?= $cliente['CPF'];?></td>
                                            <td class="info-nome"><?= $cliente['nome'];?></td>
                                            <td><?= $cliente['endereco'];?></td>
                                            <td><?= $cliente['cidade'];?></td>
                                            <td><?= $cliente['UF'];?></td>
                                            <td><?= $cliente['contato'];?></td>
                                            <td>
                                                <form action="../models/Code_Cliente.php" method="POST" class="d-inline">

                                                    <a data-toggle="modal" data-target="#ModalUsuario<?= $cliente['idCliente'];?>"
                                                    class="m-1 btn btn-sm btn_visualizar">Visualizar</a>
                                                    
                                                    <button type="submit" name="delete_cliente" 
                                                    value="<?= $cliente['idCliente'];?>" 
                                                    class="m-1 btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                        <?php include ('../utils/message.php'); ?>

                                        <div class="modal fade" id="ModalUsuario<?= $cliente['idCliente'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="row modal-content">
                                                    <div class="col-12 modal-header">
                                                        <h3 class="col-11 modal-title" id="myModalLabel" style="text-align: center; margin: auto; font-weight: bold">Alterar dados do Cliente</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="text-align: end;">
                                                            <i class="fas fa-solid fa-circle-xmark" style="color: #000000;"></i>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                    
                                                        <section class="section-content" style="margin-top: -25px">  
                                                            <form action="../models/Code_Cliente.php" method="POST" >

                                                                <!-- linha abaixo necessária para encontrar o id do usuario no comando sql-->
                                                                <input type="hidden" name="idCliente" value="<?= $cliente['idCliente']; ?>">
                                                
                                                                <div class="row">
                                                                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">

                                                                        <div class="col-6">
                                                                            <label for="cpfCliente">CPF:</label>
                                                                            <input type="text" name="cpfCliente" value="<?= $cliente['CPF']; ?>" class="form-control p-2 campoPeca  ">
                                                                        </div>          
                                                                    
                                                                        <div class="col-6">
                                                                            <label for="nomeCliente">Nome Cliente:</label>
                                                                            <input type="text" name="nomeCliente" value="<?= $cliente['nome'];?>" class="form-control p-2 campoPeca">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                                        <div class="col-6">
                                                                            <label for="endereco">Endereço:</label>
                                                                            <input type="tel" name="endereco" value="<?= $cliente['endereco'];?>" class="form-control p-2 campoPeca">
                                                                        </div>
                                                                        
                                                                        <div class="col-6">
                                                                            <label for="cidade">Cidade:</label>
                                                                            <input type="text" name="cidade" value="<?= $cliente['cidade'];?>" class="form-control p-2 campoPeca  ">
                                                                        </div> 
                                                                        
                                                                    </div>

                                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">                                                                        
                                                                        <div class="col-6">
                                                                            <label for="cidade">Contato:</label>
                                                                            <input type="text" name="contato" value="<?= $cliente['contato'];?>" class="form-control p-2 campoPeca  ">
                                                                        </div>   
                                                                        
                                                                        <div class="col-6">
                                                                            <label for="estado">Estado:</label>  
                                                                            <select name="estado" class="SelectServicoCadasServico">
                                                                                <option selected><?= $cliente['UF'];?></option>
                                                                                <option value="AC">Acre</option>
                                                                                <option value=" AL "> Alagoas </option>
                                                                                <option value=" AP "> Amapá </option>
                                                                                <option value=" AM "> Amazonas </option>
                                                                                <option value=" BA "> Bahia </option>
                                                                                <option value=" CE "> Ceará </ option>
                                                                                <option value=" DF "> Distrito Federal </option>
                                                                                <option value=" ES "> Espírito Santo </option>
                                                                                <option value=" GO "> Goiás </option>
                                                                                <option value=" MA "> Maranhão </option>
                                                                                <option value=" MT "> Mato Grosso </option>
                                                                                <option value=" MS "> Mato Grosso do Sul </option>
                                                                                <option value=" MG "> Minas Gerais </option>
                                                                                <option value=" PA "> Pará </option>
                                                                                <option value=" PB "> Paraíba </option>
                                                                                <option value=" PR "> Paraná </option>
                                                                                <option value=" PE "> Pernambuco </option>
                                                                                <option value=" PI "> Piauí </option>
                                                                                <option value=" RJ "> Rio de Janeiro </option>
                                                                                <option value=" RN "> Rio Grande do Norte </option>
                                                                                <option value=" RS "> Rio Grande do Sul </option>
                                                                                <option value=" RO "> Rondônia </option>
                                                                                <option value=" RR "> Roraima </option>
                                                                                <option value=" SC "> Santa Catarina </option>
                                                                                <option value=" SP "> São Paulo </option>
                                                                                <option value=" SE "> Sergipe </option>
                                                                                <option value=" TO "> Tocantins </option>
                                                                                <option value=" EX "> Estrangeiro </option>
                                                                            </select>

                                                                        </div>      
                                                                    </div>

                                                                    <div class="col-12 text-right modal-footer">
                                                                            <button class="botaoVisualUsu" type="submit" name="update_cliente">
                                                                            Salvar Alterações
                                                                            </button>
                                                                    </div>                    
                                                                </div>
                                                            </form>
                                                        </section>
                                                    </div>
                                                </div>
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
        <script src="../js/filtar.js"></script>
    </body>    

</html>